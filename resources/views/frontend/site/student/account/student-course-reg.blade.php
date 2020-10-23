@extends('frontend.layouts.virtual_school')
@section('content')

    <!-- PROFILE FEATURE -->
    <section class="profile-feature">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="info-author">
                <div class="image">
                    <img src="{{asset('teachers/'.$teacher->profile_pic)}}" alt="">
                </div>
                <div class="name-author">
                    <h2 class="big">{{$teacher->name}}</h2>
                </div>
                <div class="address-author">
                    <i class="fa fa-map-marker"></i>
                    <h3>{{$teacher->city}}, {{$teacher->country}}</h3>
                </div>
            </div>
            <div class="info-follow">
                {{--<div class="trophies">--}}
                    {{--<span>12</span>--}}
                    {{--<p>Trophies</p>--}}
                {{--</div>--}}
                {{--<div class="trophies">--}}
                    {{--<span>12</span>--}}
                    {{--<p>Follower</p>--}}
                {{--</div>--}}
                {{--<div class="trophies">--}}
                    {{--<span>20</span>--}}
                    {{--<p>Following</p>--}}
                {{--</div>--}}
                <div class="trophies">
                    <span>$ 149,902</span>
                    <p>Balance</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END / PROFILE FEATURE -->

    <!-- CONTEN BAR -->
    @include('frontend.site.includes.teacher-content-bar')
    <!-- END / CONTENT BAR -->



    <!-- COURSE CONCERN -->
    <section id="course-concern" class="course-concern">
        <div class="container">

            <div class="price-course">
                <i class="icon md-database"></i>
                <h3>{{ strtolower($student->name) }} / student course registration</h3>

            </div>
            {{--<div class="create-coures">--}}
                {{--<a href="{{route('get.student.register')}}" class="mc-btn btn-style-1">New student +</a>--}}
            {{--</div>--}}
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
                    @foreach($teacher_courses as $teacher_course)
                    <?php
                        $course = \App\Models\Admin\Subject::
                            where(['id' => $teacher_course->course_id, 'status' => 'active'])->first();
                        ?>
                        @if(isset($course))
                        <form action="{{route('teacher.student.course.registration.post')}}" method="post" enctype="multipart/form-data">

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
                        @endif
                    @endforeach
                    </tbody>
                </table>

                <hr>
                <a href="{{route('teacher.students')}}" class="btn btn-primary">Back</a>

            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
@endsection
