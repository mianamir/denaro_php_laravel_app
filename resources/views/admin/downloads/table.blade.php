<table class="table table-responsive" id="downloads-table">
    <thead>
        <th>Title</th>
        <th>File</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($downloads as $download)
        <tr>
            <td>{!! $download->title !!}</td>
            <td>{!! $download->file !!}</td>
            <td>{!! $download->created_at !!}</td>
            <td>{!! $download->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.downloads.destroy', $download->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.downloads.show', [$download->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.downloads.edit', [$download->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>