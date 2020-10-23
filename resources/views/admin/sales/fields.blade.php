<!-- Sale Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sale_date', 'Sale Date:') !!}
    {!! Form::text('sale_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    {!! Form::text('customer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::text('product_id', null, ['class' => 'form-control']) !!}
</div>

<!-- No Of Items Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_of_items', 'No Of Items:') !!}
    {!! Form::text('no_of_items', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_amount', 'Total Amount:') !!}
    {!! Form::text('total_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Remaining Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remaining_amount', 'Remaining Amount:') !!}
    {!! Form::text('remaining_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.sales.index') !!}" class="btn btn-default">Cancel</a>
</div>
