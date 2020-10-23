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
                <h3>Available Balance </h3>
                <span>$ 29,278</span>
                <div class="create-coures">
                    <a href="{{route('get.design.course.step1')}}" class="mc-btn btn-style-1">Design new course</a>
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
                 $teacher_courses = \App\Models\Admin\TeacherCourse::
                 where('teacher_id', $teacher->id)->get();

//                $courses = \DB::table('subjects')
//                    ->join('teacher_courses', 'teacher_courses.course_id', '=', 'subjects.id')
//                    ->get();

//                    \DB::select(\DB::raw("SELECT *
//                      FROM subjects,
//                      INNER JOIN teacher_courses ON subjects.id = teacher_courses.course_id
//                      INNER JOIN teachers ON teachers.id = teacher_courses.teacher_id
//                      "));

                ?>
                @if(isset($teacher_courses))
                @foreach($teacher_courses as $teacher_course)
                <?php
                $course = \App\Models\Admin\Subject::
                where(['id' => $teacher_course->course_id, 'status' => 'active'])
                ->orderBy('id', 'desc')
                ->first();
                ?>
                @if($course)
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <!-- MC ITEM -->
                    {{--<div class="mc-teaching-item mc-item mc-item-2">--}}
                        {{--<div class="image-heading">--}}
                            {{--@if($subject->image != null)--}}
                                {{--<image src="{{asset('subjects/'. $subject->image)}}" alt="{{$subject->title}}"/>--}}
                            {{--@else--}}
                                {{--<image src="{{asset('subjects/image_320_240.jpg')}}" alt="{{$subject->title}}"/>--}}

                            {{--@endif--}}

                        {{--</div>--}}
                        {{--<div class="meta-categories"><a href="#">{!! $subject->title !!}</a></div>--}}
                        {{--<div class="content-item">--}}
                            {{--<div class="image-author">--}}
                                {{--<img src="{{asset('teachers/'.$teacher->profile_pic)}}" alt="{{$teacher->name}}">--}}
                            {{--</div>--}}
                            {{--@if($subject->subject_type_id != null)--}}
                            {{--<h4><a href="#">{{$subject->subject_type->title}}</a></h4>--}}
                            {{--@else--}}
                                {{--<p>Not Available</p>--}}
                            {{--@endif--}}


                        {{--</div>--}}
                        {{--<div class="ft-item">--}}
                            {{--<div class="rating">--}}
                                {{--<a href="#" class="active"></a>--}}
                                {{--<a href="#" class="active"></a>--}}
                                {{--<a href="#" class="active"></a>--}}
                                {{--<a href="#"></a>--}}
                                {{--<a href="#"></a>--}}
                            {{--</div>--}}
                            {{--<div class="view-info">--}}
                                {{--<i class="icon md-users"></i>--}}
                                {{--2568--}}
                            {{--</div>--}}
                            {{--<div class="comment-info">--}}
                                {{--<i class="icon md-comment"></i>--}}
                                {{--25--}}
                            {{--</div>--}}
                            {{--<div class="price">--}}
                                {{--$190--}}
                            {{--</div>--}}
                        {{--</div>--}}


                    {{--</div>--}}
                    <!-- END / MC ITEM -->
                    <!-- ITEM -->
                    <div class="mc-teaching-item mc-item mc-item-2">
                        <div class="mc-item mc-item-2">
                            <div class="image-heading">
                                @if($course->image != null)
                                    <image src="{{asset('subjects/'. $course->image)}}" alt="{{$course->title}}"/>
                                @else
                                    <image src="{{asset('subjects/image_320_240.jpg')}}" alt="{{$course->title}}"/>

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
                            {{--<div class="ft-item">--}}
                            {{--<div class="rating">--}}
                            {{--<a href="#" class="active"></a>--}}
                            {{--<a href="#" class="active"></a>--}}
                            {{--<a href="#" class="active"></a>--}}
                            {{--<a href="#"></a>--}}
                            {{--<a href="#"></a>--}}
                            {{--</div>--}}
                            {{--<div class="view-info">--}}
                            {{--<i class="icon md-users"></i>--}}
                            {{--2568--}}
                            {{--</div>--}}
                            {{--<div class="comment-info">--}}
                            {{--<i class="icon md-comment"></i>--}}
                            {{--25--}}
                            {{--</div>--}}
                            {{--<div class="price">--}}
                            {{--{{$featured_course->price}}--}}
                            {{--<span class="price-old">{{$featured_course->price}}</span>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <?php
                            $chapters = \App\Models\Admin\Chapter::where('subject_id', $course->id)->get();
                            $chapters_count = count($chapters);
                            ?>
                            <div class="edit-view">
                                <a href="{{route('get.design.course.step1.edit', ['id'=>$course->id])}}" class="edit">Edit</a>
                                <a href="{{route('frontend.course.intro', ['id'=>$course->id])}}" class="view">View</a>
                                <a href="{{route('get.frontend.chapters', ['id'=>$course->id])}}" class="view">Chapters({{isset($chapters_count) ? $chapters_count : 0}})</a>
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
