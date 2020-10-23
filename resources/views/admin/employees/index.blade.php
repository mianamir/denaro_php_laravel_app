@extends('admin2.layouts.master')

@section('content')
    {{--<div class="row">--}}
        {{--<form class="form-inline" action="{{route('admin.employees.search')}}" method="post" enctype="multipart/form-data">--}}
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            {{--<div class="form-group mx-sm-6 mb-2" style="width: 40% !important; margin-left: 60px;">--}}
                {{--<input type="date" class="form-control" id="from" name="from" placeholder="From Date" style="width: 95% !important;">--}}
            {{--</div>--}}
            {{--<div class="form-group mx-sm-6 mb-2" style="width: 40% !important;">--}}
                {{--<input type="date" class="form-control" id="to" name="to" placeholder="To Date" style="width: 95% !important;">--}}
            {{--</div>--}}

            {{--<button type="submit" class="btn btn-primary">Search</button>--}}
        {{--</form>--}}
    {{--</div>--}}
    {{--<hr  style="border-bottom: solid 1px #3c8dbc;">--}}
    <section class="content-header">
        <h1 class="pull-left">Students</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.employees.create') !!}">Add New</a>
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
                       <th>Reg. No#</th>
                       <th>Full Name</th>
                       <th>Office Phone</th>
                       <th>Home Phone</th>
                       <th>Status</th>
                       <th>Registration Date</th>
                       <th>Actions</th>
                   </tr>
                    </thead>
                    <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee->reg_no}}</td>
                            <td>{{$employee->full_name}}</td>
                            <td>{{$employee->office_phone_no}}</td>
                            <td>{{$employee->present_home_phone_no}}</td>
                            <td>
                                @if($employee->status == "Active")
                                    <span class="label label-success">Active</span>
                                @elseif($employee->status == "NotActive")
                                    <span class="label label-warning">NotActive</span>
                                @else
                                    <span class="label label-danger">Deleted</span>
                                @endif
                            </td>
                            <td>{{$employee->created_at}}</td>

                            <td>
                                {!! Form::open(['route' => ['admin.employees.destroy', $employee->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('admin.employees.show', [$employee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="{!! route('admin.employees.edit', [$employee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
