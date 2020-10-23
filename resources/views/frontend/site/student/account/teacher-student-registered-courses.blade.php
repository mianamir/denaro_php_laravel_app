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
                <h3>{{$teacher->name}} / student registered courses</h3>

            </div>

            <div class="row">
                @if(Session::has('course_design__step1_success_flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('success_flash_message') }}
                    </div>
                @endif
                @if(Session::has('student_not_found_flash_message'))
                    <div class="alert alert-danger">
                        {{ Session::get('student_not_found_flash_message') }}
                    </div>
                @endif
                <div class="col-md-12">

                    <table class="table table-responsive" id="myTable">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>#Code</th>
                            <th>Study Group</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($student_courses as $student_course)
                            <?php
                            $course = \App\Models\Admin\Subject::find($student_course->subject_id);
                            ?>
                            @if($course)
                                <tr>
                                    <td>{!! $course->title !!}</td>
                                    <td>C-{!! $course->code !!}</td>
                                    <td>{!! isset($course->course_to_teach->title) ? $course->course_to_teach->title : "Not Available" !!}</td>
                                    <td>{!! $course->price !!}</td>

                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>


                    <a href="{{route('teacher.students')}}" class="mc-btn btn-style-1">Back</a>

                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
@endsection
