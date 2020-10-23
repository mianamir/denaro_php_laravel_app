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
                <h3>Edit Profile </h3>
                {{--<span>$ 29,278</span>--}}
                {{--<div class="create-coures">--}}
                    {{--<a href="#" class="mc-btn btn-style-1">Create new course</a>--}}
                    {{--<a href="#" class="mc-btn btn-style-5">Request Payment</a>--}}
                {{--</div>--}}

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- MC ITEM -->
                    <form action="{{route('post.student.profile.edit')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        @if(Session::has('success_flash_message'))
                            <div class="alert alert-info">
                                {{ Session::get('success_flash_message') }}
                            </div>
                        @endif


                        @if(Session::has('class_id'))
                            <div class="alert alert-danger">
                                {{ Session::get('class_id') }}
                            </div>
                        @endif
                        @if(Session::has('name'))
                            <div class="alert alert-danger">
                                {{ Session::get('name') }}
                            </div>
                        @endif
                        @if(Session::has('fathername'))
                            <div class="alert alert-danger">
                                {{ Session::get('fathername') }}
                            </div>
                        @endif
                        @if(Session::has('email'))
                            <div class="alert alert-danger">
                                {{ Session::get('email') }}
                            </div>
                        @endif


                        @if(Session::has('password'))
                            <div class="alert alert-danger">
                                {{ Session::get('password') }}
                            </div>
                        @endif
                        @if(Session::has('country'))
                            <div class="alert alert-danger">
                                {{ Session::get('country') }}
                            </div>
                        @endif
                        @if(Session::has('city'))
                            <div class="alert alert-danger">
                                {{ Session::get('city') }}
                            </div>
                        @endif

                        @if(Session::has('gender'))
                            <div class="alert alert-danger">
                                {{ Session::get('gender') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-lg-6">
                                <?php
//                                $studentclasses = \App\Models\Admin\StudentClass::all();
                                ?>
                                {{--<div class="form-question mc-select">--}}
                                    {{--<select name="class_id" class = "select" required>--}}
                                        {{--@foreach($studentclasses as $student_class)--}}
                                            {{--<option value="{{$student_class->id}}" @if(isset($student)) @if($student->class_id == $student_class->id) selected @endif @endif>--}}
                                                {{--{{$student_class->title}}--}}
                                            {{--</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}
                                {{--</div>--}}

                                <div class="form-yourname">
                                    <input type="text" value="{{old('name', $student->name)}}" placeholder="Name" name="name" class="form-control" required>
                                </div>
                                <div class="form-yourname">
                                    <input type="text"  placeholder="Father Name" name="fathername" value="{{old('fathername', $student->father_name)}}" class="form-control" required>
                                </div>

                                <div class="form-yourname">

                                    <input type="email" placeholder="Email" name="email" value="{{old('email', $student->email)}}" class="form-control" required>
                                </div>

                                <div class="form-question mc-select">
                                    <select name="gender" class = "select" required>
                                        <option value="male" @if(isset($student)) @if($student->gender == "male") selected @endif @endif>Male</option>
                                        <option value="female" @if(isset($student)) @if($student->gender == "female") selected @endif @endif>Female</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="form-yourname">

                                    <input type="password" placeholder="Password, should be 6 digits long i.e 123!$#" name="password" value="{{old('password2', $student->password2)}}" class="form-control" required>
                                </div>
                                <div class="form-yourname">

                                    <input type="text" placeholder="Country" name="country" value="{{old('country', $student->country)}}" class="form-control" required>
                                </div>

                                <div class="form-yourname">

                                    <input type="text" placeholder="City" name="city" value="{{old('city', $student->city)}}" class="form-control" required>
                                </div>

                                <div class="form-yourname">
                                    @if(isset($student))
                                        <p><img src="{{asset('students/' . $student->profile_pic)}}" width="50" height="50"/></p>
                                    @endif
                                    <input type="file" placeholder="" name="profile_pic"  class="form-control">
                                </div>





                            </div>
                        </div>


                        <div class="form-submit-1">
                            <input type="submit" value="Submit" class="mc-btn btn-style-1">
                        </div>
                    </form>

                    <!-- END / MC ITEM -->
                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
@endsection
