@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Teacher Course
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.teacherCourses.store']) !!}

                        @include('admin.teacher_courses.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
