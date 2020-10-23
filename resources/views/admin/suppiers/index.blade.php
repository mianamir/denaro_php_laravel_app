@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Suppliers</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.suppiers.create') !!}">Add New</a>
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
                    <th>Total Amount</th>
                    <th>Remaining Amount</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($suppiers as $supplier)
                        <tr>
                            <td>{{$supplier->name}}</td>
                            <td>{{$supplier->email}}</td>
                            <td>{{$supplier->phone}}</td>
                            <td><img src="{{asset($supplier->image)}}" style="width: 100px; height: 100px"></td>
                            <td>{{$supplier->total_amount}}</td>
                            <td>{{$supplier->remaining_amount}}</td>
                            <td>
                                @if($supplier->status == "Active")
                                    <span class="label label-success">Active</span>
                                @elseif($supplier->status == "NotActive")
                                    <span class="label label-warning">NotActive</span>
                                @else
                                    <span class="label label-danger">Deleted</span>
                                @endif
                            </td>
                            <td>{{$supplier->created_at}}</td>

                            <td>
                                {!! Form::open(['route' => ['admin.suppiers.destroy', $supplier->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('admin.suppiers.show', [$supplier->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="{!! route('admin.suppiers.edit', [$supplier->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
