@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Contacts</h1>
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
{{--                       <th>Title</th>--}}
                       <th>Email</th>
                       <th>Phone</th>
                       <th>Address</th>
                       <th>Map</th>
                       <th>Actions</th>
                   </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
{{--                            <td>{{$contact->title}}</td>--}}
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone1}}</td>
                            <td>{{$contact->address}}</td>
                            <td style="width: 200px; height: 20px;">{!! $contact->fax !!}</td>
                            <td>
                                {{--{!! Form::open(['route' => ['admin.contacts.destroy', $contact->id], 'method' => 'delete']) !!}--}}
                                <div class='btn-group'>
                                    {{--<a href="{!! route('admin.contacts.show', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                    <a href="{!! route('admin.contacts.edit', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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