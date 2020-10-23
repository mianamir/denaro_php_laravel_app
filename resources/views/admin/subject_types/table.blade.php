<table class="table table-responsive" id="subjectTypes-table">
    <thead>
        <th>Title</th>
        {{--<th>Created At</th>--}}
        {{--<th>Updated At</th>--}}
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($subjectTypes as $subjectType)
        <tr>
            <td>{!! $subjectType->title !!}</td>
            {{--<td>{!! $subjectType->created_at !!}</td>--}}
            {{--<td>{!! $subjectType->updated_at !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['admin.subjectTypes.destroy', $subjectType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {{--<a href="{!! route('admin.subjectTypes.show', [$subjectType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    <a href="{!! route('admin.subjectTypes.edit', [$subjectType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>