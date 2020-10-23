@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Video Galleries</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.authors.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="myTable">
                    <thead>
                    {{--<th>Parent</th>--}}
                    <th>Name</th>
                    <th>Status</th>
                    <th>Video</th>
                    <th>Actions</th>
                    </thead>
                    <tbody>
                    @foreach($authors as $author)
                        <tr>


                            <td>{{$author->name}}</td>
                            <td>
                                @if($author->show_in_navigation == 1)
                                    <span class="label label-success">Active</span>
                                @else
                                    <span class="label label-danger">Not Active</span>
                                @endif

                            </td>
                            <td>{!! $author->details  !!}</td>


                            <td>
                                {!! Form::open(['route' => ['admin.authors.destroy', $author->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    {{--<a href="{!! route('admin.categories.show', [$supplier->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                    <a href="{!! route('admin.authors.edit', [$author->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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

