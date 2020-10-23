@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">{{strtolower($course_to_teach->title)}} / teachers({{count($teachers)}})</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.teachers.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    {{--@include('admin.teachers.table')--}}
                <table class="table table-responsive table-hover" id="myTable" data-order='[[ 0, "desc" ]]'>
                    <thead>
                    <tr>
                    <th>Image</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td><img src="{!! asset('teachers/'.$teacher->profile_pic) !!}" width="100" height="100"></td>
                            <td>{!! $teacher->teacher_code !!}</td>
                            <td>{!! $teacher->name !!}</td>
                            <td>{!! $teacher->email !!}</td>
                            <td>
                                @if($teacher->status == "active")
                                    <span class="label label-primary">Active</span>
                                @elseif($teacher->status == "inactive")
                                    <span class="label label-warning">In Active</span>
                                @else
                                    <span class="label label-danger">Not Available</span>
                                @endif
                            </td>
                            <td>{!! $teacher->created_at !!}</td>
                            <td>
                                {!! Form::open(['route' => ['admin.teachers.destroy', $teacher->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('admin.teachers.show', [$teacher->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="{!! route('admin.teachers.edit', [$teacher->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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

