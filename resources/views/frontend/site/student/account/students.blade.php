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
                <h3>{{$teacher->name}} / students</h3>

            </div>
            <div class="create-coures">
                <a href="{{route('get.student.register')}}" class="mc-btn btn-style-1">New student +</a>
            </div>
            <div class="row">
                @if(Session::has('course_design__step1_success_flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('success_flash_message') }}
                    </div>
                @endif
                @if(Session::has('student_not_found_flash_message'))
                    <div class="alert alert-danger">
                        {{ Session::get('student_not_found_flash_message') }}
                    </div>
                @endif
                <div class="col-md-12">

                    <table class="table table-responsive" id="myTable">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Phone</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teacher_students as $teacher_student)
                            <?php
                            $student = \App\Models\Admin\Student::
                                where(['id' => $teacher_student->student_id, 'status' => 'active'])->first();
                            ?>

                            @if(isset($student))
                            <tr>
                                <td><img src="{!! asset('students/'.$student->profile_pic) !!}" width="70" height="70"></td>
                                <td>S-{!! $student->code !!}</td>
                                <td>{!! $student->name !!}</td>
                                <td>{!! isset($student) ? $student->student_class_func->title : "Not Available" !!}</td>
                                <td>{!! $student->phone !!}</td>
                                <td>{!! $student->password2 !!}</td>
                                <td>{!! $student->email !!}</td>

                                <td>
                                    @if($student->status == "active")
                                        <span class="label label-primary">Active</span>
                                    @else
                                        <span class="label label-warning">In Active</span>
                                    @endif
                                </td>
                                <td>
                                    {{--{!! Form::open(['route' => ['get.student.register', $student->id], 'method' => 'delete']) !!}--}}
                                    <div class='btn-group'>
                                        <a href="{!! route('teacher.student.show', [$student->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                                        <a href="{!! route('teacher.student.edit', [$student->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                                        <a href="{!! route('teacher.student.course.registration', [$student->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-book"></i></a>
                                        <a href="{!! route('teacher.student.registered_courses', [$student->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-th-list"></i></a>

                                        {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('teaching.account.dashboard')}}" class="mc-btn btn-style-1">Back</a>

                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
@endsection
