<table class="table table-responsive table-hover" id="demo">
    <thead>
        <th>Image</th>
        <th>Code</th>
        <th>Name</th>
        <th>Total Courses</th>
        <th>Email</th>
        <th>Expertise</th>
        <th>Status</th>
        <th>Joining Date</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($teachers as $teacher)
        <tr>
            <td><img src="{!! asset('teachers/'.$teacher->profile_pic) !!}" width="100" height="100"></td>
            <td>{!! $teacher->teacher_code !!}</td>
            <td>{!! $teacher->name !!}</td>
            <td>{!! $teacher->courses->count !!} </td>
            <td>{!! $teacher->email !!}</td>
            <td>{!! $teacher->course_to_teach_fun->title !!}</td>
            <td>
                @if($teacher->status == "active")
                    <span class="label label-primary">Active</span>
                @elseif($teacher->status == "inactive")
                    <span class="label label-warning">In Active</span>
                @else
                    <span class="label label-danger">Not Available</span>
                @endif
            </td>
            <td>{!! $teacher->created_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.teachers.destroy', $teacher->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.teachers.show', [$teacher->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.teachers.edit', [$teacher->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>