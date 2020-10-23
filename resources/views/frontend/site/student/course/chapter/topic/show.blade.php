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
                <h3>{{$chapter->title}} / topic details</h3>


            </div>
            <div class="row">
                <div class="col-md-12">

                <div class="row" id="topic_detail_video">
                    <div class="col-md-12">
                        <div id="overlay" style="width:100%;height:43%;z-index: 1;position: absolute; top: 20;left: 0;">
                        </div>
                        <br>
                        <div id="overlay" style="width:100%;height:43%;z-index: 1;position: absolute; top: 20;left: 0;">
                        </div>
                        <div class="form-group">
                            @if($topic->topic_video != "")
                                <iframe width="100%" height="500" poster="" src="{{$topic->topic_video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            @else
                                <p class="label label-primary">Video Not Available</p>
                            @endif

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h1>{!! $topic->title !!} </h1>
                        <p><label>Class:</label>  {!! isset($topic->topic_class) ? $topic->topic_class->title : 'Not Available'!!}</p>
                        <p><label>Class:</label>  {!! isset($topic->subject) ? $topic->subject->title : 'Not Available'!!}</p>
                        <p><label>Class:</label>  {!! isset($topic->chapter) ? $topic->chapter->title : 'Not Available'!!}</p>

                        <p><label>Created Date:</label>  {!! $topic->created_at !!}</p>
                        <p><label>Updated Date:</label>  {!! $topic->updated_at !!}</p>
                        <p><label>Details:</label>  {!! $topic->details !!}</p>

                    </div>

                </div>


                 <a href="{{route('get.student.course.chapter.topics', ['id' => $topic->chapter->id])}}" class="mc-btn btn-style-1">Back</a>


                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
@endsection
