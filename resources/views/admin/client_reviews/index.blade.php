@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Client Reviews</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.clientReviews.create') !!}">Add New</a>
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
                    <th>Client Name</th>
                    <th>Client Image</th>
                    <th>Client Feedback</th>
                    <th colspan="3">Actions</th>
                    </thead>
                    <tbody>
                    @foreach($clientReviews as $clientReview)
                        <tr>
                            <td>{{$clientReview->name}}</td>
                            <td><image src="{{asset($clientReview->image)}}" width="100" height="100"/></td>
                            <td style="width: 400px">{{$clientReview->detail}}</td>
                            <td>
                                {!! Form::open(['route' => ['admin.clientReviews.destroy', $clientReview->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('admin.clientReviews.show', [$clientReview->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="{!! route('admin.clientReviews.edit', [$clientReview->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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

