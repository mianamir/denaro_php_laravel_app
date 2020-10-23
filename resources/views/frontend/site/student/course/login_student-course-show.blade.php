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

            <div class="price-course">
                <i class="icon md-database"></i>
                <h3>{{ strtolower($student->name) }} / student course details</h3>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4 style="color: #0A0A0A">Course Details</h4>
                    @if($course)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    @if($course->promo_video != "")
                                        <iframe width="300" height="300" poster="{{asset('subjects/' . $course->image)}}" src="{{$course->promo_video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    @else
                                        <p class="label label-primary">Video Not Available</p>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-9">
                                <p>{!! $course->title !!} </p>
                                <p><label>Short Details:</label> {!! $course->short_details !!} </p>
                                <p><label>Code:</label> #C-{!! $course->code !!} </p>
                                <p><label>Study Group:</label>  {{ $course->subject_type_id != null && isset($course->subject_type) ? $course->subject_type->title : 'Not Available' }}</p>
                                <p><label>Type:</label>  {{ $course->course_type != -1 && isset($course->course_type) ? $course->course_to_teach->title : 'Not Available' }}</p>
                                <p><label>Class:</label>  {{ $course->class_id != null && isset($course->student_class) ? $course->student_class->title : 'Not Available' }}</p>
                                <p><label>Created Date:</label>  {!! $course->created_at !!}</p>
                                <p><label>Updated Date:</label>  {!! $course->updated_at !!}</p>
                                <p><label>Details:</label>  {!! $course->details !!}</p>

                            </div>

                        </div>
                        <hr>
                    @else
                        <h3>Course details not available</h3>
                    @endif
                </div>
                <div class="col-md-6">
                    <h4 style="color: #0A0A0A">Teacher Details</h4>
                    <hr>
                    @if($teacher)
                        <div class="row">
                            <div class="col-md-6">
                                <p>{!! $teacher->name !!} {!! $teacher->fathername !!} (Code: {!! $teacher->teacher_code !!})</p>
                                <p><label>Contacts:</label> {!! $teacher->contact1 !!} | {!! $teacher->contact2 !!}</p>
                                <p><label>Email:</label>  {!! $teacher->email !!}</p>
                                <p><label>Qualification:</label>  {!! $teacher->qualificatioon !!}</p>
                                <p><label>Teaching Expertise Area:</label>  {!! $teacher->course_to_teach->title !!}</p>
                                <p><label>Experience:</label>  {!! $teacher->experience !!}</p>
                                <p><label>Country:</label>  {!! $teacher->country !!}</p>
                                <p><label>City:</label>  {!! $teacher->city !!}</p>
                                <p><label>Joining Date:</label>  {!! $teacher->created_at !!}</p>


                            </div>
                        </div>
                    @else
                        <h3>Teacher details not available</h3>
                    @endif
                </div>
            </div>

            <br>
            <a href="{{route('student.dashboard')}}" class="mc-btn btn-style-1">Back</a>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
@endsection
