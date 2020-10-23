@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>{{strtolower($student->name)}} registered courses</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                    <table class="table table-responsive" id="myTable" data-order='[[ 0, "desc" ]]'>
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>#Code</th>
                            <th>Study Group</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($student_courses as $student_course)
                            <?php
                            $course = \App\Models\Admin\Subject::find($student_course->subject_id);
                            ?>
                            @if($course)
                            <tr>
                                <td>{!! $course->title !!}</td>
                                <td>C-{!! $course->code !!}</td>
                                <td>{!! isset($course->course_to_teach->title) ? $course->course_to_teach->title : "Not Available" !!}</td>
                                <td>{!! $course->price !!}</td>
                                <td>
                                    {{--{!! Form::open(['route' => ['admin.subjects.destroy', $subject->id], 'method' => 'delete']) !!}--}}
                                    <div class='btn-group'>
                                        <a href="{!! route('admin.subjects.show', [$course->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-folder-open"></i></a>
                                        {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <hr>
                <a href="{{route('admin.students.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection




