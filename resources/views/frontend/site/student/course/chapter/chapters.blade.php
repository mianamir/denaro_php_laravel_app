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
                <h3>{{$course->title}} / chapters</h3>

            </div>

            <div class="row">
                <div class="col-md-12">

                    <table class="table table-responsive table-hover" id="myTable">
                        <thead>
                        <tr>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($chapters as $chapter)
                        <tr>
                            <td>{!! $chapter->title !!}</td>
                            <td>{!! str_limit($chapter->details, 100) !!}</td>
                            <td>
                               <div class='btn-group'>
                                    <a href="{!! route('get.student.course.chapter.topics', [$chapter->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-book"></i></a>
                                    <a href="{!! route('get.student.course.chapter.topics', [$chapter->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-list"></i></a>
                                    </div>

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
            </table>

                    <a href="{{route('student.dashboard')}}" class="mc-btn btn-style-1">Back</a>

                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
@endsection
