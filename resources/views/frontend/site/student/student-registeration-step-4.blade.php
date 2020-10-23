@extends('frontend.layouts.virtual_school')

@section('content')


    <!-- FEATURED REQUEST TEACHER -->
    <section id="featured-request-teacher" class="featured-request-teacher">

        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-6">
                        <h4 style="color:#000">Course Details</h4>
                        @if($course)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @if($course->promo_video != "")
                                            <iframe width="300" height="300" poster="{{asset('subjects/' . $course->image)}}" src="{{$course->promo_video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        @else
                                            <p class="label label-primary">Video Not Available</p>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-9">
                                    <p>{!! $course->title !!} </p>
                                    <p><label>Short Details:</label> {!! $course->short_details !!} </p>
                                    <p><label>Code:</label> #C-{!! $course->code !!} </p>
                                    <p><label>Study Group:</label>  {{ $course->subject_type_id != null && isset($course->subject_type) ? $course->subject_type->title : 'Not Available' }}</p>
                                    <p><label>Type:</label>  {{ $course->course_type != -1 && isset($course->course_type) ? $course->course_to_teach->title : 'Not Available' }}</p>
                                    <p><label>Class:</label>  {{ $course->class_id != null && isset($course->student_class) ? $course->student_class->title : 'Not Available' }}</p>
                                    <p><label>Created Date:</label>  {!! $course->created_at !!}</p>
                                    <p><label>Updated Date:</label>  {!! $course->updated_at !!}</p>
                                    <p><label>Details:</label>  {!! $course->details !!}</p>

                                </div>

                            </div>
                            <hr>
                        @else
                            <h3>Course details not available</h3>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <h4 style="color:#000">Teacher Details</h4>
                        <hr>
                        @if($teacher)
                            <div class="row">
                                <div class="col-md-6">
                                    <p>{!! $teacher->name !!} {!! $teacher->fathername !!} (Code: {!! $teacher->teacher_code !!})</p>
                                    <p><label>Contacts:</label> {!! $teacher->contact1 !!} | {!! $teacher->contact2 !!}</p>
                                    <p><label>Email:</label>  {!! $teacher->email !!}</p>
                                    <p><label>Qualification:</label>  {!! $teacher->qualificatioon !!}</p>
                                    <p><label>Teaching Expertise Area:</label>  {!! $teacher->course_to_teach->title !!}</p>
                                    <p><label>Experience:</label>  {!! $teacher->experience !!}</p>
                                    <p><label>Country:</label>  {!! $teacher->country !!}</p>
                                    <p><label>City:</label>  {!! $teacher->city !!}</p>
                                    <p><label>Joining Date:</label>  {!! $teacher->created_at !!}</p>


                                </div>
                            </div>
                        @else
                            <h3>Teacher details not available</h3>
                        @endif
                    </div>
                    <hr>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{route('post.student.registration.step4')}}" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="student_id" value="{!! $student->id !!}">
                            <input type="hidden" name="course_type_id" value="{!! $course_type->id !!}">
                            <input type="hidden" name="teacher_id" value="{!! $teacher->id !!}">
                            <input type="hidden" name="course_id" value="{!! $course->id !!}">

                            <button type="submit" class="mc-btn btn-style-custom">Confirm</button>
                            <a href="#" class="mc-btn btn-style-custom">Cancel</a>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- END / FEATURED REQUEST TEACHER -->


@endsection
