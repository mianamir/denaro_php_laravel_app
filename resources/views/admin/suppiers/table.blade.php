<table class="table table-responsive" id="suppiers-table">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Total Amount</th>
        <th>Remaining Amount</th>
        <th>Image</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($suppiers as $suppier)
        <tr>
            <td>{!! $suppier->name !!}</td>
            <td>{!! $suppier->email !!}</td>
            <td>{!! $suppier->phone !!}</td>
            <td>{!! $suppier->total_amount !!}</td>
            <td>{!! $suppier->remaining_amount !!}</td>
            <td>{!! $suppier->image !!}</td>
            <td>{!! $suppier->status !!}</td>
            <td>{!! $suppier->created_at !!}</td>
            <td>{!! $suppier->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.suppiers.destroy', $suppier->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.suppiers.show', [$suppier->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.suppiers.edit', [$suppier->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>