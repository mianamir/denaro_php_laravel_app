@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Sale Invoice
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <div class="col-md-12">
                        <a href="{!! route('admin.sales.index') !!}" class="btn btn-default">Back</a>
                        <br/><br/>
                        <div class="row" style="padding-left: 20px">
                            <div class="col-md-6">
                                <h4>Customer Information</h4>
                                <p><img src="{{asset($customer->image)}}" style="width: 400px; height: 300px"></p>
                                <p>Name: {{$customer->name}}</p>
                                <p>Email: {{$customer->email}}</p>
                                <p>Phone: {{$customer->phone}}</p>
                                <p>Total Amount: {{$customer->total_amount}}</p>
                                <p>Remaining Amount: {{$customer->remaining_amount}}</p>
                                <p>Address: {{$customer->address}}</p>
                                <p>Ciy: {{$customer->city}}</p>
                                <p>Country: {{$customer->country}}</p>
                                <p>Date: {{$customer->created_at}}</p>
                                @if($customer->status == 'Active')
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

                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <h2 style="text-align: center">Sale Information</h2>

                                <table class="table table-responsive table-bordered" id="demo1">
                                    <thead>
                                    <tr>
                                        <th>Sale No #</th>
                                        <th>Expense</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Payment </th>
                                        <th>Balance</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>{{$sale->sale_no}}</td>

                                            <td>{{$totalExpense}}</td>
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
                                            <td>{{$sale->total_amount}}</td>
                                            <td>{{$sale->remaining_amount}}</td>

                                        </tr>

                                    </tbody>
                                </table>

                                <br>
                                <a href="{!! route('admin.sales.index') !!}" class="btn btn-default">Back</a>

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
