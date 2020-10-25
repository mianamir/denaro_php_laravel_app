@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Pages</h1>
        <h1 class="pull-right">

        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="m1yTable">
                    <thead>
                    <tr>
{{--                        <th>Name</th>--}}
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $page)
                        <tr>
{{--                            <td>{{$page->name}}</td>--}}
                            <td>{{$page->title}}</td>
                            <td>
                                {{--{!! Form::open(['route' => ['admin.pages.destroy', $contact->id], 'method' => 'delete']) !!}--}}
                                <div class='btn-group'>
{{--                                    <a href="{!! route('admin.pages.show', [$page->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                    <a href="{!! route('admin.pages.edit', [$page->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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

{{--@section('after-scripts')--}}
    {{--{{ Html::script("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.js") }}--}}
    {{--{{ Html::script("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/af.js") }}--}}

    {{--<script>--}}
        {{--$(function () {--}}
            {{--$("#myTable").DataTable();--}}
        {{--});--}}
    {{--</script>--}}
{{--@endsection--}}