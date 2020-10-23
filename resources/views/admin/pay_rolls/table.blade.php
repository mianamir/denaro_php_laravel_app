<table class="table table-responsive" id="payRolls-table">
    <thead>
        <th>Employee Id</th>
        <th>Salary</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($payRolls as $payRoll)
        <tr>
            <td>{!! $payRoll->employee_id !!}</td>
            <td>{!! $payRoll->salary !!}</td>
            <td>{!! $payRoll->status !!}</td>
            <td>{!! $payRoll->created_at !!}</td>
            <td>{!! $payRoll->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.payRolls.destroy', $payRoll->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.payRolls.show', [$payRoll->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.payRolls.edit', [$payRoll->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>