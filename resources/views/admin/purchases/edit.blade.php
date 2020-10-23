@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Purchase
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <form action="{{route('admin.purchases.update',['id'=>$purchase->id])}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Error!</strong> please provide below form fields.<br><br>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(Session::has('ref_no'))
                            <div class="alert alert-danger">
                                {{ Session::get('ref_no') }}
                            </div>
                        @endif
                        @if(Session::has('model'))
                            <div class="alert alert-danger">
                                {{ Session::get('model') }}
                            </div>
                        @endif
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Supplier</label><br>
                               <?php
                               $suppliers = \App\Models\Admin\Suppier::all();
                               ?>
                               <select class="form-control" name="supplier_id">

                                   <option value="-1">Select Supplier</option>
                                   @foreach( $suppliers as $s)
                                       <option value="{{$s->id}}"
                                               {{isset($s) && $s->id == $purchase->supplier_id ?"selected":''}}>{{$s->name}}</option>
                                   @endforeach

                               </select>
                           </div>
                       </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product</label><br>
                                <?php
                                $products = \App\Models\Admin\Product::all();
                                ?>
                                <select class="form-control" name="product_id">

                                    <option value="-1">Select Product</option>
                                    @foreach( $products as $p)
                                        <option value="{{$p->id}}"
                                                {{isset($p) && $p->id == $purchase->product_id ?"selected":''}}>{{$p->make}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purchase Date</label>
                                <input id="purchase_date" name="purchase_date"
                                       value="{{old('purchase_date', $purchase)->purchase_date}}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purchase Price</label>
                                <input id="" name="purchase_price"
                                       value="{{old('purchase_price', $purchase)->total_amount}}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Status</label><br>
                                <select class="form-control" name="status">

                                    <option value="-1">Select Status</option>
                                        <option value="Active"
                                                {{isset($purchase) && $purchase->status == "Active" ?"selected":''}}>Active</option>
                                    <option value="Pending"
                                            {{isset($purchase) && $purchase->status == "Pending" ?"selected":''}}>Pending</option>
                                    <option value="Pending"
                                            {{isset($purchase) && $purchase->status == "Deleted" ?"selected":''}}>Deleted</option>


                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="" value="Update" class="btn btn-primary">
                                <a href="{{route('admin.purchases.index')}}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
@endsection
