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
                    <form action="{{route('post.account.teacher.profile')}}" method="post" enctype="multipart/form-data">
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
                        @if(Session::has('contact1'))
                            <div class="alert alert-danger">
                                {{ Session::get('contact1') }}
                            </div>
                        @endif
                        @if(Session::has('contact2'))
                            <div class="alert alert-danger">
                                {{ Session::get('contact2') }}
                            </div>
                        @endif
                        @if(Session::has('email'))
                            <div class="alert alert-danger">
                                {{ Session::get('email') }}
                            </div>
                        @endif
                        @if(Session::has('qualificatioon'))
                            <div class="alert alert-danger">
                                {{ Session::get('qualificatioon') }}
                            </div>
                        @endif
                        @if(Session::has('subject_to_teach'))
                            <div class="alert alert-danger">
                                {{ Session::get('subject_to_teach') }}
                            </div>
                        @endif
                        @if(Session::has('experience'))
                            <div class="alert alert-danger">
                                {{ Session::get('experience') }}
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
                        @if(Session::has('cnic'))
                            <div class="alert alert-danger">
                                {{ Session::get('cnic') }}
                            </div>
                        @endif
                        @if(Session::has('cnic'))
                            <div class="alert alert-danger">
                                {{ Session::get('cnic') }}
                            </div>
                        @endif

                        @if(Session::has('payment_plan_id'))
                            <div class="alert alert-danger">
                                {{ Session::get('payment_plan_id') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-yourname">
                                    <input type="text" value="{{old('name', $teacher->name)}}" placeholder="Name" name="name" class="form-control" required>
                                </div>
                                <div class="form-yourname">
                                    <input type="text"  placeholder="Father Name" name="fathername" value="{{old('fathername', $teacher->fathername)}}" class="form-control" required>
                                </div>
                                <div class="form-yourname">

                                    <input type="text" placeholder="Contact1" name="contact1" value="{{old('contact1', $teacher->contact1)}}" class="form-control" required>
                                </div>
                                <div class="form-yourname">

                                    <input type="text" placeholder="Contact2"  name="contact2" value="{{old('contact2', $teacher->contact2)}}" class="form-control" required>
                                </div>

                                <div class="form-yourname">

                                    <input type="email" placeholder="Email" name="email" value="{{old('email', $teacher->email)}}" class="form-control" required>
                                </div>

                                <div class="form-yourname">

                                    <input type="text" placeholder="Qualification" name="qualificatioon" value="{{old('qualificatioon', $teacher->qualificatioon)}}" class="form-control" required>
                                </div>

                                <div class="form-yourname">

                                    <input type="text" placeholder="Subject to Teach" name="subject_to_teach" value="{{old('subject_to_teach', $teacher->subject_to_teach)}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-yourname">

                                    <input type="text" placeholder="Experience" name="experience" value="{{old('experience', $teacher->experience)}}" class="form-control" required>
                                </div>

                                <div class="form-yourname">

                                    <input type="password" placeholder="Password" name="password" value="{{old('password2', $teacher->password2)}}" class="form-control" required>
                                </div>
                                <div class="form-yourname">

                                    <input type="text" placeholder="Country" name="country" value="{{old('country', $teacher->country)}}" class="form-control" required>
                                </div>

                                <div class="form-yourname">

                                    <input type="text" placeholder="City" name="city" value="{{old('city', $teacher->city)}}" class="form-control" required>
                                </div>

                                <div class="form-yourname">
                                    <input type="file" placeholder="" name="profile_pic"  class="form-control">
                                </div>
                                <div class="form-yourname">
                                    <input type="text" placeholder="CNIC" name="cnic" name="cnic" value="{{old('cnic', $teacher->cnic)}}" class="form-control" required>
                                </div>

                                <?php
                                $payment_plans = \App\Models\Admin\PaymentPlan::all()
                                ?>
                                <div class="form-question mc-select">
                                    <select name="payment_plan_id" class = "select" required>
                                        @foreach($payment_plans as $payment_plan)
                                            <option value="{{$payment_plan->id}}"
                                                    @if($payment_plan->id == $teacher->payment_plan_id) selected="selected" @endif>Rs. {{$payment_plan->price}}/{{$payment_plan->duration}}</option>
                                        @endforeach
                                    </select>
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
