@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>{!! isset($student) ? strtolower($student->student_class_func->title) : "Not Available" !!} / courses / for {{strtolower($student->name)}} </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @if(Session::has('student_course_duplicate'))
                        <div class="alert alert-danger">
                            {{ Session::get('student_course_duplicate') }}
                        </div>
                    @endif

                    <table class="table table-responsive" id="myTable1_datata_error_on_this_table">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>#Code</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <form action="{{route('admin.student.course.registration.post')}}" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="course_id" value="{!! $course->id !!}">
                            <input type="hidden" name="student_id" value="{!! $student->id !!}">
                            <tr>
                                <td>{!! $course->title !!}</td>
                                <td>C-{!! $course->code !!}</td>
                                <td>{!! $course->price !!}</td>
                                <td>
                                    <div class='btn-group'>
                                        <button type="submit" class="btn btn-primary">Register Course</button>
                                    </div>

                                </td>
                            </tr>

                            </form>
                        @endforeach
                        </tbody>
                    </table>

                    <hr>
                    <a href="{{route('admin.students.index')}}" class="btn btn-primary">Back</a>

                </div>
            </div>
        </div>
    </div>
@endsection




