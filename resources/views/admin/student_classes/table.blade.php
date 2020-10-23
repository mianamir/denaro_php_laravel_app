<table class="table table-responsive" id="studentClasses-table">
    <thead>
        <th>Title</th>
        {{--<th>Created At</th>--}}
        {{--<th>Updated At</th>--}}
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($studentClasses as $studentClass)
        <tr>
            <td>{!! $studentClass->title !!}</td>
            {{--<td>{!! $studentClass->created_at !!}</td>--}}
            {{--<td>{!! $studentClass->updated_at !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['admin.studentClasses.destroy', $studentClass->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {{--<a href="{!! route('studentClasses.show', [$studentClass->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    <a href="{!! route('admin.studentClasses.edit', [$studentClass->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('admin.courses.by.class', [$studentClass->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-list"></i></a>
                    <a href="{!! route('admin.students.by.class.index', [$studentClass->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-user"></i></a>
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>