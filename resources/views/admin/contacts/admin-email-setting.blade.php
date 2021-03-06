@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Admin Email Setting</h1>
        {{--<h1 class="pull-right">--}}
           {{--<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.contacts.create') !!}">Add New</a>--}}
        {{--</h1>--}}
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="demo1">
                    <thead>
                   <tr>

                       <th>Email</th>
                       <th>Password</th>
                       <th>Actions</th>
                   </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->password2}}</td>
                            <td>
                                {{--{!! Form::open(['route' => ['admin.contacts.destroy', $contact->id], 'method' => 'delete']) !!}--}}
                                <div class='btn-group'>
                                    {{--<a href="{!! route('admin.contacts.show', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                    <a href="{!! route('admin.email.setting.edit', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                                </div>
                                {{--{!! Form::close() !!}--}}
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