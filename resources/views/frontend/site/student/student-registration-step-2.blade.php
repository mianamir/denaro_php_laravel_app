@extends('frontend.layouts.virtual_school')

@section('content')


    <!-- FEATURED REQUEST TEACHER -->
    <section id="featured-request-teacher" class="featured-request-teacher">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h3>{{strtolower($student->name)}} / course registration</h3>
                    @if(Session::has('student_course_duplicate'))
                        <div class="alert alert-danger">
                            {{ Session::get('student_course_duplicate') }}
                        </div>
                    @endif

                    <table class="table table-hover table-responsive" id="">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($course_types as $course_type)
                            <form action="{{route('get.student.registration.step3', [$course_type->id, $student->id])}}" method="get" enctype="multipart/form-data">

                                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                {{--<input type="hidden" name="student_id" value="{!! $student->id !!}">--}}
                                {{--<input type="hidden" name="course_type_id" value="{!! $course_type->id !!}">--}}
                                <tr>
                                    <td>{!! $course_type->title !!}</td>
                                    <td>
                                        <div class='btn-group'>
                                            <button type="submit" class="btn btn-primary">Select Category</button>
                                        </div>

                                    </td>
                                </tr>

                            </form>
                        @endforeach
                        </tbody>
                    </table>

                </div>


            </div>
        </div>

    </section>
    <!-- END / FEATURED REQUEST TEACHER -->


@endsection
