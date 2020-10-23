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
    <section class="content-bar">
        <div class="container">
            <ul>
                {{--<li>--}}
                {{--<a href="account-learning.html">--}}
                {{--<i class="icon md-book-1"></i>--}}
                {{--Learning--}}
                {{--</a>--}}
                {{--</li>--}}
                <li class="current">
                    <a href="{{route('teaching.account.dashboard')}}">
                        <i class="icon md-people"></i>
                        Teaching
                    </a>
                </li>
                {{--<li>--}}
                {{--<a href="account-assignment.html">--}}
                {{--<i class="icon md-shopping"></i>--}}
                {{--Assignment--}}
                {{--</a>--}}
                {{--</li>--}}
                <li>
                    <a href="{{route('get.account.teacher.profile')}}">
                        <i class="icon md-user-minus"></i>
                        Profile
                    </a>
                </li>
                {{--<li>--}}
                {{--<a href="account-inbox.html">--}}
                {{--<i class="icon md-email"></i>--}}
                {{--Inbox--}}
                {{--</a>--}}
                {{--</li>--}}
            </ul>
        </div>
    </section>
    <!-- END / CONTENT BAR -->



    <!-- COURSE CONCERN -->
    <section id="course-concern" class="course-concern">
        <div class="container">

            <div class="price-course">
                <i class="icon md-database"></i>
                <h3>Update Course </h3>
                {{--<span>$ 29,278</span>--}}
                {{--<div class="create-coures">--}}
                    {{--<a href="#" class="mc-btn btn-style-1">Create new course</a>--}}
                    {{--<a href="#" class="mc-btn btn-style-5">Request Payment</a>--}}
                {{--</div>--}}

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- MC ITEM -->
                    <form action="{{route('post.design.course.step1.edit', ['id' => $course->id])}}" method="post" enctype="multipart/form-data">
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

                        @if(Session::has('course_design__step1_success_flash_message'))
                            <div class="alert alert-info">
                                {{ Session::get('course_design__step1_success_flash_message') }}
                            </div>
                        @endif

                        @if(Session::has('title'))
                            <div class="alert alert-danger">
                                {{ Session::get('title') }}
                            </div>
                        @endif
                        @if(Session::has('short_details'))
                            <div class="alert alert-danger">
                                {{ Session::get('short_details') }}
                            </div>
                        @endif
                        @if(Session::has('subject_type_id'))
                            <div class="alert alert-danger">
                                {{ Session::get('subject_type_id') }}
                            </div>
                        @endif
                        @if(Session::has('price'))
                            <div class="alert alert-danger">
                                {{ Session::get('price') }}
                            </div>
                        @endif
                        @if(Session::has('status'))
                            <div class="alert alert-danger">
                                {{ Session::get('status') }}
                            </div>
                        @endif

                        @if(Session::has('promo_video'))
                            <div class="alert alert-danger">
                                {{ Session::get('promo_video') }}
                            </div>
                        @endif

                        @if(Session::has('class_id'))
                            <div class="alert alert-danger">
                                {{ Session::get('class_id') }}
                            </div>
                        @endif



                <div class="row">
                    <div class="col-lg-6">
                        <?php
                        $subject_types = \App\Models\Admin\SubjectType::all()
                        ?>
                        <div class="form-question mc-select">
                            <select name="subject_type_id" class = "select" required>
                                @foreach($subject_types as $subject_type)
                                    <option value="{{$subject_type->id}}" @if($subject_type->id == $course->subject_type_id) selected="selected" @endif>{{$subject_type->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-yourname">
                            <input type="text" placeholder="Title" name="title" value="{{old('title', $course->title)}}" class="form-control" required>
                        </div>
                        <div class="form-yourname">
                            <input type="text"  placeholder="Short Details" name="short_details" value="{{old('short_details', $course->short_details)}}" class="form-control" required>
                        </div>
                        <div class="form-yourname">

                            <input type="text" placeholder="Price"  name="price" value="{{old('price', $course->price)}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-question mc-select">
                            <select name="status" class = "select" required>
                                <option value="active" {{isset($course) && $course->status == "active" ?"selected":''}}>Active</option>
                                <option value="inactive" {{isset($course) && $course->status == "inactive" ?"selected":''}}>In Active</option>

                            </select>
                        </div>
                        <div class="form-yourname">

                            <input type="text" placeholder="Promo Video Youtube URL i.e https://www.youtube.com/embed/pT8H8JuXrqE"  name="promo_video" value="{{old('promo_video', $course->promo_video)}}" class="form-control" required>
                        </div>

                        <?php
                        $subject_classes = \App\Models\Admin\StudentClass::all()
                        ?>
                        <div class="form-question mc-select">
                            <select name="class_id" class = "select" required>
                                @foreach($subject_classes as $subject_class)
                                    <option value="{{$subject_class->id}}" @if(isset($course)) @if($course->class_id == $subject_class->id) selected @endif @endif>{{$subject_class->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br><br>

                        <div class="form-item form-checkbox checkbox-style">
                            <input type="checkbox" id="lifestyle" name="is_featured" {{ $course->is_featured == 1 ? 'checked' : null }}>
                            <label for="lifestyle">
                                <i class="icon-checkbox icon md-check-1"></i>
                                Is Featured
                            </label>
                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="description-editor text-form-editor">
                            <textarea placeholder="Discussion content" name="details" id="details">
                                {!! $course->details !!}
                            </textarea>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <div class="image-info">
                            <img src="{{asset('subjects/'. $course->image)}}" width="100" height="100" alt="">
                        </div>
                        <div class="upload-recrop">
                            <div class="upload-image up-file">
                                <a href="#"><i class="icon md-upload"></i>Upload course image</a>
                                <input type="file" name="image">
                            </div>
                            {{--<div class="recrop">--}}
                            {{--<a href="#"><i class="icon md-crop"></i>Recrop</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-info">
                            <img src="{{asset('subjects/'. $course->promo_video_featured_image)}}" width="100" height="100" alt="">
                        </div>
                        <div class="upload-recrop">
                            <div class="upload-image up-file">
                                <a href="#"><i class="icon md-upload"></i>Upload course promo video feature image</a>
                                <input type="file" name="promo_video_featured_image">
                            </div>
                            {{--<div class="recrop">--}}
                            {{--<a href="#"><i class="icon md-crop"></i>Recrop</a>--}}
                            {{--</div>--}}
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
