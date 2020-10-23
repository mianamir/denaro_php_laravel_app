<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $purchase->id !!}</p>
</div>

<!-- Purchase No Field -->
<div class="form-group">
    {!! Form::label('purchase_no', 'Purchase No:') !!}
    <p>{!! $purchase->purchase_no !!}</p>
</div>

<!-- Purchase Date Field -->
<div class="form-group">
    {!! Form::label('purchase_date', 'Purchase Date:') !!}
    <p>{!! $purchase->purchase_date !!}</p>
</div>

<!-- Supplier Id Field -->
<div class="form-group">
    {!! Form::label('supplier_id', 'Supplier Id:') !!}
    <p>{!! $purchase->supplier_id !!}</p>
</div>

<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', 'Product Id:') !!}
    <p>{!! $purchase->product_id !!}</p>
</div>

<!-- Total Amount Field -->
<div class="form-group">
    {!! Form::label('total_amount', 'Total Amount:') !!}
    <p>{!! $purchase->total_amount !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $purchase->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $purchase->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $purchase->updated_at !!}</p>
</div>

