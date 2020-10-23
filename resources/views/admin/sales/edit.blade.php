@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Sale
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <form action="{{route('admin.sales.update',['id'=>$sale->id])}}" method="post" enctype="multipart/form-data">
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
                               <label>Customer</label><br>
                               <?php
                               $customers = \App\Models\Admin\Customer::all();
                               ?>
                               <select class="form-control" name="customer_id">

                                   <option value="-1">Select Customer</option>
                                   @foreach( $customers as $c)
                                       <option value="{{$c->id}}"
                                               {{isset($c) && $c->id == $sale->customer_id ?"selected":''}}>{{$c->name}}</option>
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
                                               {{isset($p) && $p->id == $sale->product_id ?"selected":''}}>{{$p->make}}</option>
                                   @endforeach

                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>No of Products/Items</label>
                               <input id="no_of_items" name="no_of_items"
                                      value="{{old('no_of_items', $sale)->no_of_items}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Sale Price</label>
                               <input id="sale_price" name="sale_price"
                                      value="{{old('sale_price', $sale)->sale_price}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Sale Discount %</label>
                               <input id="discount" name="discount"
                                      value="{{old('discount', $sale)->discount}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Sale Date</label>
                               <input id="sale_date" name="sale_date"
                                      value="{{old('sale_date', $sale)->sale_date}}" type="text" class="form-control">
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Total Sale Amount:</label>
                               <input type="text" class="form-control"
                                      name="totalSaleAmount" id="totalSaleAmount"
                                      value="{{old('totalSaleAmount', $sale)->total_amount}}" ></h3>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Select Status</label><br>
                               <select class="form-control" name="status">

                                   <option value="-1">Select Status</option>
                                   <option value="Active"
                                           {{isset($sale) && $sale->status == "Completed" ?"selected":''}}>Completed</option>
                                   <option value="Pending"
                                           {{isset($sale) && $sale->status == "Pending" ?"selected":''}}>Pending</option>
                                   {{--<option value="Pending"--}}
                                           {{--{{isset($sale) && $sale->status == "Deleted" ?"selected":''}}>Deleted</option>--}}


                               </select>
                           </div>
                       </div>
                       {{--<div class="col-md-6">--}}
                       {{--<div class="form-group">--}}
                       {{--<label>Remaining Amount:</label>--}}
                       {{--<input type="text" class="form-control"--}}
                       {{--name="reaminingAmount" id="reaminingAmount" value="00.00"></h3>--}}
                       {{--</div>--}}
                       {{--</div>--}}

                       <div class="col-md-12">
                           <div class="form-group">
                               <input type="submit" name="" value="Save" class="btn btn-primary">
                               <a href="{{route('admin.sales.index')}}" class="btn btn-default">Cancel</a>
                           </div>
                       </div>




                   </form>
               </div>
           </div>
       </div>
   </div>
@endsection