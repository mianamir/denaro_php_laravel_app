@extends('admin2.layouts.master')

@section('content')
    <div class="row">
        <form class="form-inline" action="{{route('admin.products.search')}}" method="post" enctype="multipart/form-data">
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
        <h1 class="pull-left">Products</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.products.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <br>
        <div class="row">
            <div class="col-md-12">
                <h4 style="text-align: center">Total Products Amount: <strong>{{$totalPrice}}</strong></h4>
            </div>

        </div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                {{--@include('admin.products.table')--}}
                <table class="table table-responsive table-hover" id="demo">
                    <thead>
                    <tr>
                        <th>Ref. No</th>
                        <th>Chassis No</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Car Type</th>
                        <th>Mileages</th>
                        <th>Price</th>
                        {{--<th>Fresh Arrival</th>--}}
                        {{--<th>Featured Stock</th>--}}
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->ref_no}}</td>
                            <td>{{$product->chassis_type}}</td>
                            <td>{{$product->make}}</td>
                            <td>{{$product->model}}</td>
                            <td>{{$product->car_type}}</td>
                            <td>{{$product->mileages}} km</td>
                            <td>Rs. {{$product->price}}</td>
                            {{--<td>--}}
                            {{--@if($product->is_fresh_arrival == 1)--}}
                            {{--<span class="label label-success">Yes</span>--}}
                            {{--@else--}}
                            {{--<span class="label label-warning">No</span>--}}
                            {{--@endif--}}
                            {{--</td>--}}
                            {{--<td>--}}
                            {{--@if($product->is_featured_stock == 1)--}}
                            {{--<span class="label label-success">Yes</span>--}}
                            {{--@else--}}
                            {{--<span class="label label-warning">No</span>--}}
                            {{--@endif--}}
                            {{--</td>--}}
                            <td>
                                @if($product->status == "Active")
                                    <span class="label label-success">Active</span>
                                @elseif($product->status == "Pending")
                                    <span class="label label-warning">Pending</span>
                                @else
                                    <span class="label label-danger">Deleted</span>
                                @endif
                            </td>
                            <td>{{$product->created_at}}</td>
                            <td>
                                {!! Form::open(['route' => ['admin.products.destroy', $product->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('admin.products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="{!! route('admin.products.edit', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="{!! route('admin.products.get.product.expenses', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-wrench"></i></a>
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
