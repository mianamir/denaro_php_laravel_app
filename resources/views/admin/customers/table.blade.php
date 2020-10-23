<table class="table table-responsive" id="customers-table">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>City</th>
        <th>Country</th>
        <th>Total Amount</th>
        <th>Remaining Amount</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>{!! $customer->name !!}</td>
            <td>{!! $customer->email !!}</td>
            <td>{!! $customer->phone !!}</td>
            <td>{!! $customer->address !!}</td>
            <td>{!! $customer->city !!}</td>
            <td>{!! $customer->country !!}</td>
            <td>{!! $customer->total_amount !!}</td>
            <td>{!! $customer->remaining_amount !!}</td>
            <td>{!! $customer->status !!}</td>
            <td>{!! $customer->created_at !!}</td>
            <td>{!! $customer->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.customers.destroy', $customer->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.customers.show', [$customer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.customers.edit', [$customer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>