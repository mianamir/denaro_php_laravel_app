@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Supplier
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <div class="col-md-12">
                        <a href="{!! route('admin.suppiers.index') !!}" class="btn btn-default">Back</a>
                        <br/><br/>
                        <div class="row" style="padding-left: 20px">


                            <div class="col-md-6">
                                <p>Name: {{$supplier->name}}</p>
                                <p>Email: {{$supplier->email}}</p>
                                <p>Phone: {{$supplier->phone}}</p>
                                <p>Total Amount: {{$supplier->total_amount}}</p>
                                <p>Remaining Amount: {{$supplier->remaining_amount}}</p>
                                <p>Address: {{$supplier->address}}</p>
                                <p>Ciy: {{$supplier->city}}</p>
                                <p>Country: {{$supplier->country}}</p>
                                <p>Date: {{$supplier->created_at}}</p>
                                @if($supplier->status == 'Active')
                                    <p>Status: Active</p>
                                @else
                                    <p>Status: NotActive</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <p><img src="{{asset($supplier->image)}}" style="width: 400px; height: 300px"></p>
                            </div>

                            <hr/>
                            <div class="row">
                                <div class="col-md-12">
                            <h2 style="text-align: center">Purchase History</h2>
                            <?php $purchasesCount = \App\Models\Admin\Purchase::where('supplier_id',$supplier->id)->get()->count();
                            $purchases = \App\Models\Admin\Purchase::where('supplier_id',$supplier->id)->get();
                            $totalPurchaseAmount = 0;
                            ?>
                            @if($purchasesCount > 0 )
                                        <table class="table table-responsive" id="myTable">
                                            <thead>
                                            <th>Purchase No</th>
                                            <th>Product</th>
                                            <th>Purchase Price</th>
                                            <th>Purchase Date</th>
                                            <th>Status</th>
                                            <th colspan="3">Actions</th>
                                            </thead>
                                            <tbody>
                                            @foreach($purchases as $purchase)
                                                <tr>
                                                    <td>{{$purchase->purchase_no}}</td>
                                                    <?php
                                                       $product = \App\Models\Admin\Product::where('id',$purchase->product_id)->first();

                                                    ?>
                                                    <td>{{$product->make}}</td>
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
                                                            {{--<a href="{!! route('admin.contacts.show', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
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

                                        <a href="{!! route('admin.products.index') !!}" class="btn btn-default">Back</a>
                             @else
                                <h4 style="text-align: center">No Purchases Found</h4>
                              @endif
                            </div>
                            </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
