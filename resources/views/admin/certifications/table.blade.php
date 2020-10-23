<table class="table table-responsive" id="certifications-table">
    <thead>
        <th>Image</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($certifications as $certification)
        <tr>
            <td>{!! $certification->image !!}</td>
            <td>{!! $certification->created_at !!}</td>
            <td>{!! $certification->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.certifications.destroy', $certification->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.certifications.show', [$certification->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.certifications.edit', [$certification->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>