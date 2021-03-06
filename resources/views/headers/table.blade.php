<table class="table table-responsive" id="headers-table">
    <thead>
        <th>Logo</th>
        <th>Title</th>
        <th>Sub Title</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($headers as $header)
        <tr>
            <td>{!! $header->logo !!}</td>
            <td>{!! $header->title !!}</td>
            <td>{!! $header->sub_title !!}</td>
            <td>{!! $header->phone !!}</td>
            <td>{!! $header->email !!}</td>
            <td>{!! $header->created_at !!}</td>
            <td>{!! $header->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['headers.destroy', $header->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('headers.show', [$header->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('headers.edit', [$header->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>