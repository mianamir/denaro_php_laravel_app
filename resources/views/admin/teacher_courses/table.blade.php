<table class="table table-responsive" id="teacherCourses-table">
    <thead>
        <th>Teacher Id</th>
        <th>Course Id</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($teacherCourses as $teacherCourse)
        <tr>
            <td>{!! $teacherCourse->teacher_id !!}</td>
            <td>{!! $teacherCourse->course_id !!}</td>
            <td>{!! $teacherCourse->status !!}</td>
            <td>{!! $teacherCourse->created_at !!}</td>
            <td>{!! $teacherCourse->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.teacherCourses.destroy', $teacherCourse->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.teacherCourses.show', [$teacherCourse->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.teacherCourses.edit', [$teacherCourse->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>