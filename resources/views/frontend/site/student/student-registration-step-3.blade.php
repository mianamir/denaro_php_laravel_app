@extends('frontend.layouts.virtual_school')

@section('content')


    <!-- FEATURED REQUEST TEACHER -->
    <section id="featured-request-teacher" class="featured-request-teacher">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h3>{{strtolower($student->name)}} / {{strtolower($course_type->title)}} / teachers</h3>
                    @if(Session::has('student_course_duplicate'))
                        <div class="alert alert-danger">
                            {{ Session::get('student_course_duplicate') }}
                        </div>
                    @endif

                    <table class="table table-hover table-responsive" id="">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Course Fee</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)


                            <form action="{{route('get.student.registration.step4', [$course_type->id, $teacher->id, $student->id])}}" method="get" enctype="multipart/form-data">

                                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                {{--<input type="hidden" name="student_id" value="{!! $student->id !!}">--}}
                                {{--<input type="hidden" name="course_type_id" value="{!! $course_type->id !!}">--}}
                                {{--<input type="hidden" name="teacher_id" value="{!! $teacher->id !!}">--}}
                                <tr>
                                    <td>{!! $teacher->name !!}</td>
                                    <td>
                                        @if($teacher->payment_plan_id != null)
                                            <p>Payment Plan: Rs. {!! $teacher->payment_plan->price !!}/{!! $teacher->payment_plan->duration !!}</p>
                                        @else
                                            <p>Payment Plan:  Not Available</p>
                                        @endif
                                    </td>
                                    <td>
                                        <div class='btn-group'>
                                            <?php

                                            $teacher_courses = \App\Models\Admin\TeacherCourse::all();

                                            foreach ($teacher_courses as $teacher_course){
                                                if ($teacher->id == $teacher_course->teacher_id){
                                                    $temp_course = \App\Models\Admin\Subject::
                                                        where(['id' => $teacher_course->course_id, 'class_id' => $student->class_id, 'status' => 'active'])->first();
                                                    $GLOBALS['a'] = 1;
                                                }

                                            }
                                            ?>
                                            <a href="{{route('frontend.course.intro', 1)}}" class="btn btn-primary" target="_blank"> View Course</a>
                                            <button type="submit" class="btn btn-primary">Buy Course</button>
                                        </div>

                                    </td>
                                </tr>

                            </form>
                        @endforeach
                        </tbody>
                    </table>

                </div>


            </div>
        </div>

    </section>
    <!-- END / FEATURED REQUEST TEACHER -->


@endsection
