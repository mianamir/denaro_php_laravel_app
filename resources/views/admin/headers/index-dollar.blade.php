@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Dollar Price</h1>
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
                    <th>Dollar Price</th>

                    <th colspan="3">Actions</th>
                    </thead>
                    <tbody>

                        <tr>


                            <td>{{$header->url}}</td>
                            <td>
                              <div class='btn-group'>
                                    {{--<a href="{!! route('admin.headers.show', [$header->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                    <a href="{!! route('admin.headers.dollar', [$header->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                     </div>

                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

