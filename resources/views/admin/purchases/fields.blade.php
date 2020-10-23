<!-- Purchase Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purchase_date', 'Purchase Date:') !!}
    {{--{!! Form::text('purchase_date', null, ['class' => 'form-control']) !!}--}}

    <input id="purchase_date" name="purchase_date" type="text" class="form-control">
</div>

<!-- Supplier Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supplier_id', 'Supplier:') !!}


    <?php
    $categories = \App\Models\Admin\Suppier::all();
    ?>
    <select class="form-control" name="supplier_id">

        <option value="">Select Supplier</option>
        @foreach( $categories as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
        @endforeach

    </select>
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product:') !!}
    <?php
    $categories = \App\Models\Admin\Product::all();
    ?>
    <select class="form-control" name="product_id">

        <option value="">Select Product</option>
        @foreach( $categories as $cat)
            <option value="{{$cat->id}}">{{$cat->make}}</option>
        @endforeach

    </select>
</div>

<!-- Total Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_amount', 'Purchase Price:') !!}
    {!! Form::text('total_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('status', 'Status:') !!}--}}
    {{--{!! Form::text('status', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.purchases.index') !!}" class="btn btn-default">Cancel</a>
</div>
