@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Purchase Invoice
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <div class="col-md-12">
                        <a href="{!! route('admin.purchases.index') !!}" class="btn btn-default">Back</a>
                        <br/><br/>
                        <div class="row">
                            <div class="col-md-6"><h4>Purchase Price: <strong>{{$purchase->total_amount}}</strong></h4></div>
                            <div class="col-md-6"><h4>Purchase Date: <strong>{{$purchase->created_at}}</strong></h4></div>
                        </div>
                        <hr>
                        <div class="row" style="padding-left: 20px">
                            <div class="col-md-6">
                                <h4>Supplier Information</h4>
                                <p><img src="{{asset($supplier->image)}}" style="width: 400px; height: 300px"></p>
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
                                <h4>Vehicle Information</h4>
                                @if($product->image != null)
                                    <p>Image: <img src="{{asset($product->image)}}" width="100" height="100"></p>
                                @endif
                                <p>Ref. No: {{$product->ref_no}}</p>
                                <p>Chassis No: {{$product->chassis_type}}</p>
                                <p>Price: {{$product->price}}</p>
                                <p>Make: {{$product->make}}</p>
                                <p>Model: {{$product->model}}</p>
                                <p>Version: {{$product->version}}</p>
                                <p>Version: {{$product->year}}</p>
                                <p>Color Exterior: {{$product->color_ext}}</p>
                                <p>Color Interior: {{$product->color_int}}</p>
                                <p>Car Type: {{$product->car_type}}</p>
                                <p>Engine CC: {{$product->engine_cc}}</p>
                                <p>Transmission: {{$product->transmission}}</p>
                                <p>Doors: {{$product->doors}}</p>
                                <p>Seats: {{$product->seats}}</p>
                                <p>Mileages: {{$product->mileages}}</p>
                                <p>Registration/Import: {{$product->registration_import}}</p>
                                <p>Availability: {{$product->availability}}</p>
                                @if($product->is_fresh_arrival == 1)
                                    <p>Fresh Arrival: Yes</p>
                                @else
                                    <p>Fresh Arrival: No</p>
                                @endif
                                @if($product->is_featured_stock == 1)
                                    <p>Featured Stock: Yes</p>
                                @else
                                    <p>Featured Stock: No</p>
                                @endif


                            </div>

                            <hr/>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 style="text-align: center">Purchase Expenses</h2>
                                    <?php
                                    $totalExpenseAmount = 0;
                                    ?>
                                    @if($expensesCount > 0 )
                                        <table class="table table-responsive" id="demo">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Details</th>
                                                <th>Type</th>
                                                <th>Product</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($expenses as $expense)
                                                <tr>
                                                    <td>{{$expense->name}}</td>
                                                    <td>{{$expense->details}}</td>
                                                    <td>{{$expense->type}}</td>
                                                    <td>
                                                        @if($product != null)
                                                            {{$product->make}}
                                                        @else
                                                            NotAvailable
                                                        @endif
                                                    </td>
                                                    <td>{{$expense->amount}}</td>
                                                    <td>{{$expense->created_at}}</td>
                                                    <td>
                                                        @if($expense->status == "Completed")
                                                            <span class="label label-success">Completed</span>
                                                        @elseif($expense->status == "Pending")
                                                            <span class="label label-warning">Pending</span>
                                                        @else
                                                            <span class="label label-danger">Deleted</span>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        {!! Form::open(['route' => ['admin.expenses.destroy', $expense->id], 'method' => 'delete']) !!}
                                                        <div class='btn-group'>
                                                            {{--<a href="{!! route('admin.expenses.show', [$expense->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                                            <a href="{!! route('admin.expenses.edit', [$expense->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                                        </div>
                                                        {!! Form::close() !!}
                                                    </td>

                                                </tr>
                                                <strong style="display: none"> {{$totalExpenseAmount += $expense->amount}}</strong>
                                            @endforeach
                                            </tbody>
                                        </table>

                                        <br>
                                        <h3 style="text-align: center">Total Expenses Amount: <strong>{{$totalExpenseAmount}}</strong></h3>

                                        <a href="{!! route('admin.purchases.index') !!}" class="btn btn-default">Back</a>
                                    @else
                                        <h4 style="text-align: center">No Expenses Found</h4>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
@endsection
@section('postJquery')
    @parent

@endsection
