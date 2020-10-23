<table class="table table-responsive" id="sales-table">
    <thead>
        <th>Sale No</th>
        <th>Sale Date</th>
        <th>Customer Id</th>
        <th>Product Id</th>
        <th>No Of Items</th>
        <th>Total Amount</th>
        <th>Remaining Amount</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($sales as $sale)
        <tr>
            <td>{!! $sale->sale_no !!}</td>
            <td>{!! $sale->sale_date !!}</td>
            <td>{!! $sale->customer_id !!}</td>
            <td>{!! $sale->product_id !!}</td>
            <td>{!! $sale->no_of_items !!}</td>
            <td>{!! $sale->total_amount !!}</td>
            <td>{!! $sale->remaining_amount !!}</td>
            <td>{!! $sale->status !!}</td>
            <td>{!! $sale->created_at !!}</td>
            <td>{!! $sale->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.sales.destroy', $sale->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.sales.show', [$sale->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.sales.edit', [$sale->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>