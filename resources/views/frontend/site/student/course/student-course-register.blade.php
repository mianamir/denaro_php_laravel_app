@extends('frontend.layouts.virtual_school')
@section('content')

    <!-- PROFILE FEATURE -->
    <section class="profile-feature">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="info-author">
                <div class="image">
                    <img src="{{asset('students/'.$student->profile_pic)}}" alt="">
                </div>
                <div class="name-author">
                    <h2 class="big">{{$student->name}}</h2>
                </div>
                <div class="address-author">
                    <i class="fa fa-map-marker"></i>
                    <h3>{{$student->city}}, {{$student->country}}</h3>
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
    @include('frontend.site.includes.student-content-bar')
    <!-- END / CONTENT BAR -->



    <!-- COURSE CONCERN -->
    <section id="course-concern" class="course-concern">
        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <h1>{{strtolower($student->name)}} / course registration</h1>
                    @if(Session::has('student_course_duplicate'))
                        <div class="alert alert-danger">
                            {{ Session::get('student_course_duplicate') }}
                        </div>
                    @endif

                    <table class="table table-hover table-responsive" id="">
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
                            <?php
                               
                            $student_course_check = \App\Models\Admin\StudentCourse::
                                    where(['student_id' => $student->id, 'subject_id' => $course->id])->first();
                            ?>
                            
                            <form action="{{route('student.course.register.post')}}" method="post" enctype="multipart/form-data">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="course_id" value="{!! $course->id !!}">
                                <input type="hidden" name="student_id" value="{!! $student->id !!}">
                                <tr>
                                    <td>{!! $course->title !!}</td>
                                    <td>C-{!! $course->code !!}</td>
                                    <td>{!! $course->price !!}</td>
                                    <td>
                                        @if(isset($student_course_check))
                                        <div class='btn-group'>
                                            <a href="{{route('get.student.course.chapters', [$course->id])}}" class="btn btn-primary">View Course</a>
                                        </div>
                                        @else
                                        <div class='btn-group'>
                                            <button type="submit" class="btn btn-primary">Take Course</button>
                                        </div>
                                        @endif
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
    <!-- END / COURSE CONCERN -->
@endsection
