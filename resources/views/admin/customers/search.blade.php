@extends('admin2.layouts.master')

@section('content')
    <div class="row">
        <form class="form-inline" action="{{route('admin.customers.search')}}" method="post" enctype="multipart/form-data">
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
        <h1 class="pull-left">Customers</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.customers.create') !!}">Add New</a>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Image</th>
                        {{--<th>Address</th>--}}
                        {{--<th>City</th>--}}
                        {{--<th>Country</th>--}}
                        <th>Total Amount</th>
                        <th>Remaining Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->phone}}</td>
                            <td><img src="{{asset($customer->image)}}" style="width: 100px; height: 100px"></td>
                            {{--<td>{{$customer->address}}</td>--}}
                            {{--<td>{{$customer->city}}</td>--}}
                            {{--<td>{{$customer->country}}</td>--}}

                            <td>{{$customer->total_amount}}</td>
                            <td>{{$customer->remaining_amount}}</td>
                            <td>
                                @if($customer->status == "Active")
                                    <span class="label label-success">Active</span>
                                @elseif($customer->status == "NotActive")
                                    <span class="label label-warning">NotActive</span>
                                @else
                                    <span class="label label-danger">Deleted</span>
                                @endif
                            </td>
                            <td>{{$customer->created_at}}</td>

                            <td>
                                {!! Form::open(['route' => ['admin.customers.destroy', $customer->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('admin.customers.show', [$customer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="{!! route('admin.customers.edit', [$customer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
