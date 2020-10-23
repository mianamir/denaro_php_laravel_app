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
                <h3>Design Course </h3>
                {{--<span>$ 29,278</span>--}}
                {{--<div class="create-coures">--}}
                    {{--<a href="#" class="mc-btn btn-style-1">Create new course</a>--}}
                    {{--<a href="#" class="mc-btn btn-style-5">Request Payment</a>--}}
                {{--</div>--}}

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- MC ITEM -->
                    <form action="{{route('post.design.course.step1')}}" method="post" enctype="multipart/form-data">
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

                        @if(Session::has('course_not_found_flash_message'))
                            <div class="alert alert-info">
                                {{ Session::get('course_not_found_flash_message') }}
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
                                    <option value="{{$subject_type->id}}">{{$subject_type->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-yourname">
                            <input type="text" placeholder="Title" name="title" class="form-control" required>
                        </div>
                        <div class="form-yourname">
                            <input type="text"  placeholder="Short Details" name="short_details" class="form-control" required>
                        </div>
                        <div class="form-yourname">

                            <input type="text" placeholder="Price"  name="price" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-question mc-select">
                            <select name="status" class = "select" required>
                                <option value="active">Active</option>
                                <option value="inactive">In Active</option>
                            </select>
                        </div>
                        <div class="form-yourname">

                            <input type="text" placeholder="Promo Video Youtube URL i.e https://www.youtube.com/embed/pT8H8JuXrqE"  name="promo_video" class="form-control" required>
                        </div>

                        <?php
                        $subject_classes = \App\Models\Admin\StudentClass::all()
                        ?>
                        <div class="form-question mc-select">
                            <select name="class_id" class = "select" required>
                                @foreach($subject_classes as $subject_class)
                                    <option value="{{$subject_class->id}}">{{$subject_class->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br><br>

                        <div class="form-item form-checkbox checkbox-style">
                            <input type="checkbox" id="lifestyle" name="is_featured">
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
                            <textarea placeholder="Discussion content" name="details" id="details"></textarea>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <div class="image-info">
                            <img src="{{asset('subjects/img-upload.jpg')}}" alt="">
                        </div>
                        <div class="upload-recrop">
                            <div class="upload-image up-file">
                                <a href="#"><i class="icon md-upload"></i>Upload course image</a>
                                <input type="file" name="image" required>
                            </div>
                            {{--<div class="recrop">--}}
                            {{--<a href="#"><i class="icon md-crop"></i>Recrop</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-info">
                            <img src="{{asset('subjects/img-upload.jpg')}}" alt="">
                        </div>
                        <div class="upload-recrop">
                            <div class="upload-image up-file">
                                <a href="#"><i class="icon md-upload"></i>Upload course promo video feature image</a>
                                <input type="file" name="promo_video_featured_image" required>
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
