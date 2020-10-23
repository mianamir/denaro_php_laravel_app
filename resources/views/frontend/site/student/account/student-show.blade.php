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
                <i class="icon md-user-minus"></i>
                <h3>Student Details</h3>
                {{--<span>$ 29,278</span>--}}
                {{--<div class="create-coures">--}}
                    {{--<a href="#" class="mc-btn btn-style-1">Create new course</a>--}}
                    {{--<a href="#" class="mc-btn btn-style-5">Request Payment</a>--}}
                {{--</div>--}}

            </div>
            <div class="row">
                <div class="col-md-8">
                    <p>Class: {!! isset($student) ? $student->student_class_func->title : "Not Available" !!}</p>
                    <p>Code: S-{{$student->code}}</p>
                    <p>Name: {{$student->name}}</p>
                    <p>Father Name: {{$student->father_name}}</p>
                    <p>Email: {{$student->email}}</p>
                    <p>Phone: {{$student->phone}}</p>
                    <p>Password: {{$student->password2}}</p>
                    <p>Gender: {{$student->gender}}</p>
                    <p>Type: {{$student->type}}</p>
                    <p>City: {{$student->city}}</p>
                    <p>Country: {{$student->country}}</p>
                    <p>Status: {{$student->status}}</p>

                </div>
                <div class="col-md-4">
                    <p><img src="{{asset('students/' . $student->profile_pic)}}" width="200" height="200"/></p>
                </div>

            </div>
            <br>
            <a href="{{route('teacher.students')}}" class="mc-btn btn-style-1">Back</a>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
@endsection
