<table class="table table-responsive" id="purchases-table">
    <thead>
        <th>Purchase No</th>
        <th>Purchase Date</th>
        <th>Supplier Id</th>
        <th>Product Id</th>
        <th>Total Amount</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($purchases as $purchase)
        <tr>
            <td>{!! $purchase->purchase_no !!}</td>
            <td>{!! $purchase->purchase_date !!}</td>
            <td>{!! $purchase->supplier_id !!}</td>
            <td>{!! $purchase->product_id !!}</td>
            <td>{!! $purchase->total_amount !!}</td>
            <td>{!! $purchase->status !!}</td>
            <td>{!! $purchase->created_at !!}</td>
            <td>{!! $purchase->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.purchases.destroy', $purchase->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.purchases.show', [$purchase->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.purchases.edit', [$purchase->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>