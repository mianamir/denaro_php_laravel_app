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
                <h3>Balance </h3>
                <span>$ 29,278</span>
                <div class="create-coures">
                    {{--<a href="{{route('student.course.register', [$student->id])}}" class="mc-btn btn-style-1">Take New Course + </a>--}}
                    {{--<a href="#" class="mc-btn btn-style-5">Request Payment</a>--}}
                </div>

            </div>
            <div class="row">

                @if(Session::has('course_design__step1_success_flash_message'))
                    <div class="alert alert-info">
                        {{ Session::get('course_design__step1_success_flash_message') }}
                    </div>
                @endif
                <?php
                 $student_courses = \App\Models\Admin\StudentCourse::
                 where('student_id', $student->id)->get();

                ?>
                @if(isset($student_courses))
                @foreach($student_courses as $student_course)
                <?php
                $course = \App\Models\Admin\Subject::
                where('id', $student_course->subject_id)
                ->orderBy('id', 'desc')
                ->first();
                ?>
                @if(isset($course) && $student_course->status == 'active')
                <div class="col-xs-6 col-sm-4 col-md-3">

                    <!-- ITEM -->
                    <div class="mc-teaching-item mc-item mc-item-2">
                        <div class="mc-item mc-item-2">
                            <div class="image-heading">
                                @if($course->image != null)
                                    <a target="_blank" href="{{route('frontend.course.intro', ['id'=>$course->id])}}">
                                    <image src="{{asset('subjects/'. $course->image)}}" alt="{{$course->title}}"/>
                                    </a>
                                @else
                                    <a target="_blank" href="{{route('frontend.course.intro', ['id'=>$course->id])}}">
                                    <image src="{{asset('subjects/image_320_240.jpg')}}" alt="{{$course->title}}"/>
                                    </a>

                                @endif
                            </div>
                            @if($course->subject_type_id != null)
                                <div class="meta-categories"><a href="#">{{$course->subject_type->title}}</a></div>
                            @else
                                <td>Not Available</td>
                            @endif
                            <div class="content-item">
                                <div class="image-author">
                                    <img src="{{asset('assets/images/avatar-1.jpg')}}" alt="">
                                </div>
                                <h3 style="font-size: 17px;font-weight: 700;"><a href="{{route('frontend.course.intro', ['id'=>$course->id])}}">{!!$course->title !!}</a></h3>
                                <p style="font-size: 14px;">{!! str_limit($course->short_details, 80) !!}</p>
                                <div class="name-author">
                                    Price <a href="#"> {{$course->price}}</a>
                                </div>
                            </div>

                            <?php
                            $chapters = \App\Models\Admin\Chapter::where('subject_id', $course->id)->get();
                            $chapters_count = count($chapters);
                            ?>
                            <div class="edit-view">
                                {{--<a href="#" class="edit">Edit</a>--}}
                                {{--<a href="#" class="view">View</a>--}}
                                <a href="{{route("get.student.course.chapters", [$course->id])}}" class="view">Chapters({{isset($chapters_count) ? $chapters_count : 0}})</a>
                            </div>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                </div>
                @endif
                @if(isset($course) && $student_course->status == 'inactive')
                    <div class="col-xs-6 col-sm-4 col-md-3">

                        <!-- ITEM -->
                        <div class="mc-teaching-item mc-item mc-item-2">
                            <div class="mc-item mc-item-2">
                                <div class="image-heading">
                                    @if($course->image != null)
                                        <a target="_blank" href="{{route('frontend.course.intro', ['id'=>$course->id])}}">
                                        <image src="{{asset('subjects/'. $course->image)}}" alt="{{$course->title}}"/>
                                        </a>
                                    @else
                                        <a target="_blank" href="{{route('frontend.course.intro', ['id'=>$course->id])}}">
                                        <image src="{{asset('subjects/image_320_240.jpg')}}" alt="{{$course->title}}"/>
                                        </a>

                                    @endif
                                </div>
                                <div class="meta-categories"><a href="#">{{$student_course->status}}</a></div>
                                <div class="content-item">
                                    <div class="image-author">
                                        <img src="{{asset('assets/images/avatar-1.jpg')}}" alt="">
                                    </div>
                                    <h3 style="font-size: 17px;font-weight: 700;"><a target="_blank" href="{{route('frontend.course.intro', ['id'=>$course->id])}}">{!!$course->title !!}</a></h3>
                                    <p style="font-size: 14px;">{!! str_limit($course->short_details, 80) !!}</p>
                                    <div class="name-author">
                                        Price <a href="#"> {{$course->price}}</a>
                                    </div>
                                </div>

                                <?php
                                $chapters = \App\Models\Admin\Chapter::where('subject_id', $course->id)->get();
                                $chapters_count = count($chapters);
                                ?>
                                <div class="edit-view">

                                    <a href="#" class="view">Chapters({{isset($chapters_count) ? $chapters_count : 0}})</a>
                                </div>
                            </div>
                        </div>
                        <!-- END / ITEM -->
                    </div>
                @endif
                        @endforeach
                @else
                  <h3>Not Courses Found</h3>
                @endif

            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
@endsection
