<table class="table table-responsive" id="classSubjects-table">
    <thead>
        <th>Class</th>
        <th>Subject</th>
        {{--<th>Created At</th>--}}
        {{--<th>Updated At</th>--}}
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($classSubjects as $classSubject)
        <?php
        $class_name = \App\Models\Admin\StudentClass::
        where('id', $classSubject->student_class_id)->first();
        $subject = \App\Models\Admin\Subject::
        where('id', $classSubject->subject_id)->first();
        ?>
        <tr>
            <td>{!! $class_name->title!!}</td>
            <td>{!! $subject->title !!}</td>
            {{--<td>{!! $classSubject->created_at !!}</td>--}}
            {{--<td>{!! $classSubject->updated_at !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['admin.classSubjects.destroy', $classSubject->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {{--<a href="{!! route('admin.classSubjects.show', [$classSubject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    <a href="{!! route('admin.classSubjects.edit', [$classSubject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>