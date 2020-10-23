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
                <h3>{{$chapter->title}} / new topic</h3>
                {{--<span>$ 29,278</span>--}}
                {{--<div class="create-coures">--}}
                    {{--<a href="#" class="mc-btn btn-style-1">Create new course</a>--}}
                    {{--<a href="#" class="mc-btn btn-style-5">Request Payment</a>--}}
                {{--</div>--}}

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- MC ITEM -->
                    <form action="{{route('post.frontend.topic.new', ['id' => $chapter->id])}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Error!</strong> please provide below form fields.<br><br>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(Session::has('success_flash_message'))
                            <div class="alert alert-info">
                                {{ Session::get('success_flash_message') }}
                            </div>
                        @endif

                        @if(Session::has('topic_not_saved_flash_message'))
                            <div class="alert alert-danger">
                                {{ Session::get('topic_not_saved_flash_message') }}
                            </div>
                        @endif

                        @if(Session::has('title'))
                            <div class="alert alert-danger">
                                {{ Session::get('title') }}
                            </div>
                        @endif

                        @if(Session::has('details'))
                            <div class="alert alert-danger">
                                {{ Session::get('details') }}
                            </div>
                        @endif


                <div class="row">
                    <div class="col-md-4">
                        <div class="form-yourname">
                            <input type="text"  placeholder="Title" name="title" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-yourname">
                            <input type="text"  placeholder="Topic Video URL" name="topic_video" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-question mc-select">

                            <select class="select" name="status" id="status" required>
                                <option value="active">Active</option>
                                <option value="inactive">In Active</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">

                        <div class="description-editor text-form-editor">
                            <textarea placeholder="Discussion content" name="details" id="details">
                            </textarea>
                        </div>
                    </div>
                </div>

                <div class="form-submit-1">
                            <input type="submit" value="Submit" class="mc-btn btn-style-1">
                        </div>

                </form>


                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
@endsection
