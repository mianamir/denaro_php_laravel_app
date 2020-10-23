@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left"> {{strtolower($student_class->title)}} / students</h1>

    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('admin.students.table-students-by-class')
            </div>
        </div>
    </div>
@endsection

