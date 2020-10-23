@extends('frontend.layouts.virtual_school')
{{--@section('title')--}}
    {{--{!!$content->title!!}--}}
{{--@endsection--}}
{{--@section('keywords')--}}
    {{--{!!$content->met_keywords!!}--}}
{{--@endsection--}}
{{--@section('description')--}}
    {{--{!!$content->meta_description!!}--}}
{{--@endsection--}}
@section('content')
    <!-- SUB BANNER -->
    <section class="sub-banner section">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="sub-banner-content">
                <h2 class="big">This is banner for promoted course</h2>
                <p>this is not only an elegant theme but also a course management system for wordpress and drupal</p>
                <a href="#" class="mc-btn btn-style-3">See course</a>
            </div>
        </div>
    </section>
    <!-- END / SUB BANNER -->


    <!-- PAGE CONTROL -->
    <section class="page-control">
        <div class="container">
            <div class="page-info">
                <a href="{{route('frontend.index')}}"><i class="icon md-arrow-left"></i>Back to home</a>
            </div>
            <div class="page-view">
                View
                <span class="page-view-info view-grid active" title="View grid"><i class="icon md-ico-2"></i></span>
                <span class="page-view-info view-list" title="View list"><i class="icon md-ico-1"></i></span>
                <div class="mc-select">
                    <select class="select" name="" id="all-categories">
                        <option value="">All level</option>
                        <option value="">2</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
    <!-- END / PAGE CONTROL -->

    <!-- CATEGORIES CONTENT -->
    <section id="categories-content" class="categories-content">
        <div class="container">
            <div class="row">

                <div class="col-md-9 col-md-push-3">
                    <div class="content grid">
                        <div class="row">
                            @foreach($courses as $course)
                            <!-- ITEM -->
                            <div class="col-sm-6 col-md-4">
                                <div class="mc-item mc-item-2">
                                    <div class="image-heading">
                                        @if($course->image != null)
                                            <a href="{{route('frontend.course.intro', ['id'=>$course->id])}}">
                                            <image src="{{asset('subjects/'. $course->image)}}" alt="{{$course->title}}"/>
                                            </a>    
                                        @else
                                            <a href="{{route('frontend.course.intro', ['id'=>$course->id])}}">
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
                                </div>
                            </div>
                            <!-- END / ITEM -->
                            @endforeach


                        </div>
                    </div>
                </div>

                <!-- SIDEBAR CATEGORIES -->
                <div class="col-md-3 col-md-pull-9">
                    <aside class="sidebar-categories">
                        <div class="inner">

                            <!-- WIDGET TOP -->
                            <div class="widget">
                                <ul class="list-style-block">
                                    <li class="current"><a href="#">Featured</a></li>
                                    <li><a href="#">Staff pick</a></li>
                                    <li><a href="#">Free</a></li>
                                    <li><a href="#">Top paid</a></li>
                                </ul>
                            </div>
                            <!-- END / WIDGET TOP -->

                            <!-- WIDGET CATEGORIES -->
                            <div class="widget widget_categories">
                                <ul class="list-style-block">
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Art and Photography</a></li>
                                    <li><a href="#">Health and Fitness</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Math and Science</a></li>
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">Social Science</a></li>
                                    <li><a href="#">Game</a></li>
                                    <li><a href="#">Crafts and Hobbies</a></li>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Sports</a></li>
                                </ul>
                            </div>
                            <!-- END / WIDGET CATEGORIES -->

                            <!-- BANNER ADS -->
                            <div class="mc-banner">
                                <a href="#"><img src="images/banner-ads-1.jpg" alt=""></a>
                            </div>
                            <!-- END / BANNER ADS -->

                            <!-- BANNER ADS -->
                            <div class="mc-banner">
                                <a href="#"><img src="images/banner-ads-2.jpg" alt=""></a>
                            </div>
                            <!-- END / BANNER ADS -->
                        </div>
                    </aside>
                </div>
                <!-- END / SIDEBAR CATEGORIES -->

            </div>
        </div>
    </section>
    <!-- END / CATEGORIES CONTENT -->

@endsection



