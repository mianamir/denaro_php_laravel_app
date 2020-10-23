@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">{{ isset($chapter) ? $chapter->title : "Not Available" }} / topics</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.topics.create', $chapter->id) !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('admin.topics.table')
            </div>
        </div>
    </div>
@endsection
