<table class="table table-responsive" id="expenses-table">
    <thead>
        <th>Product Id</th>
        <th>Name</th>
        <th>Details</th>
        <th>Type</th>
        <th>Amount</th>
        <th>Supplier Id</th>
        <th>Employee</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($expenses as $expense)
        <tr>
            <td>{!! $expense->product_id !!}</td>
            <td>{!! $expense->name !!}</td>
            <td>{!! $expense->details !!}</td>
            <td>{!! $expense->type !!}</td>
            <td>{!! $expense->amount !!}</td>
            <td>{!! $expense->supplier_id !!}</td>
            <td>{!! $expense->employee !!}</td>
            <td>{!! $expense->status !!}</td>
            <td>{!! $expense->created_at !!}</td>
            <td>{!! $expense->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.expenses.destroy', $expense->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.expenses.show', [$expense->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.expenses.edit', [$expense->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>