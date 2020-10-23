@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Headers</h1>
        {{--<h1 class="pull-right">--}}
           {{--<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.headers.create') !!}">Add New</a>--}}
        {{--</h1>--}}
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="myTable">
                    <thead>
                    <th>Logo</th>
                    {{--<th>Title</th>--}}
                    {{--<th>Image 1</th>--}}
                    {{--<th>Image 2</th>--}}
                    <th>Phone</th>
                    <th>Email</th>
                    <th colspan="3">Actions</th>
                    </thead>
                    <tbody>
                        <tr>

                            <td><img src="{{asset($header->logo)}}" width="100" height="100"/></td>
                            {{--<td>{{$header->url}}</td>--}}
                            {{--<td><image src="{{asset($header->image1)}}" width="100" height="100"/></td>--}}
                            {{--<td><image src="{{asset($header->image2)}}" width="100" height="100"/></td>--}}
                            <td>{{$header->phone}}</td>
                            <td>{{$header->email}}</td>
                            <td>
                                {{--{!! Form::open(['route' => ['admin.headers.destroy', $header->id], 'method' => 'delete']) !!}--}}
                                <div class='btn-group'>
                                    {{--<a href="{!! route('admin.headers.show', [$header->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                    <a href="{!! route('admin.headers.edit', [$header->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                                </div>
                                {{--{!! Form::close() !!}--}}
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

