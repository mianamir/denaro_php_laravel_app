<table class="table table-responsive" id="myTable">
    <thead>
        <tr>
            <th>Image</th>
            <th>Code</th>
            <th>Name</th>
            <th>Class</th>
            <th>Phone</th>
            {{--<th>Password</th>--}}
            {{--<th>Email</th>--}}
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <td><img src="{!! asset('students/'.$student->profile_pic) !!}" width="100" height="100"></td>
            <td>S-{!! $student->code !!}</td>
            <td>{!! $student->name !!}</td>
            <td>{!! isset($student) ? $student->student_class_func->title : "Not Available" !!}</td>
            <td>{!! $student->phone !!}</td>
            {{--<td>{!! $student->password2 !!}</td>--}}
            {{--<td>{!! $student->email !!}</td>--}}

            <td>
                @if($student->status == "active")
                    <span class="label label-primary">Active</span>
                @elseif($student->status == "inactive")
                    <span class="label label-warning">In Active</span>
                @else
                    <span class="label label-danger">Not Available</span>
                @endif
            </td>
            <td>
                {!! Form::open(['route' => ['admin.students.destroy', $student->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.students.show', [$student->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.students.edit', [$student->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('admin.student.course.registration', [$student->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-book"></i></a>
                    <a href="{!! route('student.registered.courses.list', [$student->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-th-list"></i></a>

                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>