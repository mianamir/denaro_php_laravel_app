@extends('admin2.layouts.master')

@section('content')
    <div class="row">
        <form class="form-inline" action="{{route('admin.purchases.search')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group mx-sm-6 mb-2" style="width: 40% !important; margin-left: 60px;">
                <input type="date" class="form-control" id="from" name="from" placeholder="From Date" style="width: 95% !important;">
            </div>
            <div class="form-group mx-sm-6 mb-2" style="width: 40% !important;">
                <input type="date" class="form-control" id="to" name="to" placeholder="To Date" style="width: 95% !important;">
            </div>

            <button type="submit" class="btn btn-primary">Search</button>
        </form>

    </div>
    <hr  style="border-bottom: solid 1px #3c8dbc;">
    <section class="content-header">
        <h1 class="pull-left">Purchases</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.purchases.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="demo">
                    <thead>
                    <tr>
                        <th>Purchase No</th>
                        <th>Product</th>
                        <th>Supplier</th>
                        <th>Purchase Price</th>
                        <th>Purchase Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $totalPurchaseAmount = 0 ?>
                    @foreach($purchases as $purchase)
                        <tr>
                            <td>{{$purchase->purchase_no}}</td>
                            <?php
                            $product = \App\Models\Admin\Product::where('id',$purchase->product_id)->first();
                            $supplier = \App\Models\Admin\Suppier::where('id',$purchase->supplier_id)->first();
                            ?>
                            <td>{{$product->make}}</td>
                            <td>{{$supplier->name}}</td>
                            <td>{{$purchase->total_amount}}</td>
                            <td>{{$purchase->created_at}}</td>
                            <td>
                                @if($purchase->status == "Active")
                                    <span class="label label-success">Active</span>
                                @elseif($purchase->status == "Pending")
                                    <span class="label label-warning">Pending</span>
                                @else
                                    <span class="label label-danger">Deleted</span>
                                @endif
                            </td>

                            <td>
                                {!! Form::open(['route' => ['admin.purchases.destroy', $purchase->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('admin.purchases.show', [$purchase->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="{!! route('admin.purchases.edit', [$purchase->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>

                        </tr>
                       <strong style="display: none"> {{$totalPurchaseAmount += $purchase->total_amount}}</strong>
                    @endforeach
                    </tbody>
                </table>

                <br>
                <h3 style="text-align: center">Total Purchases Amount: <strong>{{$totalPurchaseAmount}}</strong></h3>
            </div>
        </div>
    </div>
@endsection
@section('postJquery')
    @parent

@endsection


