@extends('admin2.layouts.master')

@section('content')

    <div class="row">
        <form class="form-inline" action="{{route('admin.sales.search')}}" method="post" enctype="multipart/form-data">
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
        <h1 class="pull-left">Sales</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.sales.create') !!}">Add New</a>
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
                        <th>Sales No</th>
                        <th>Product</th>
                        <th>Customer</th>
                        <th>Sale Price</th>
                        <th>Discount</th>
                        <th>Total Amount</th>
                        <th>Remaining Amount</th>
                        <th>Sale Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($sales as $sale)
                        <tr>
                            <td>{{$sale->sale_no}}</td>
                            <?php
                            $product = \App\Models\Admin\Product::where('id',$sale->product_id)->first();
                            $customer = \App\Models\Admin\Customer::where('id',$sale->customer_id)->first();
                            ?>
                            <td>{{$product->make}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$sale->sale_price}}</td>
                            <td>{{$sale->discount}}%</td>
                            <td>{{$sale->total_amount}}</td>
                            <td>{{$sale->remaining_amount}}</td>
                            <td>{{$sale->created_at}}</td>
                            <td>
                                @if($sale->status == "Completed")
                                    <span class="label label-success">Completed</span>
                                @elseif($sale->status == "Pending")
                                    <span class="label label-warning">Pending</span>
                                @else
                                    <span class="label label-danger">Deleted</span>
                                @endif
                            </td>

                            <td>
                                {!! Form::open(['route' => ['admin.sales.destroy', $sale->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('admin.sales.show', [$sale->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="{!! route('admin.sales.edit', [$sale->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection
@section('postJquery')
    @parent

@endsection

