<table class="table table-responsive" id="cEOS-table">
    <thead>
        <th>Title</th>
        <th>Image</th>
        <th>Details</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($cEOS as $cEO)
        <tr>
            <td>{!! $cEO->title !!}</td>
            <td><image src="{{asset($cEO->image)}}" width="100" height="100"/></td>
            <td>{!! $cEO->details !!}</td>
            <td>{!! $cEO->created_at !!}</td>
            <td>{!! $cEO->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.cEOS.destroy', $cEO->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.cEOS.show', [$cEO->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.cEOS.edit', [$cEO->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
<!--                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}-->
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>