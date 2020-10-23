@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Product
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">

                    <form action="{{route('admin.products.update', [$product->id])}}" method="post" enctype="multipart/form-data">
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
                        @if(Session::has('make'))
                            <div class="alert alert-danger">
                                {{ Session::get('make') }}
                            </div>
                        @endif
                        @if(Session::has('version'))
                            <div class="alert alert-danger">
                                {{ Session::get('version') }}
                            </div>
                        @endif
                        @if(Session::has('color_ext'))
                            <div class="alert alert-danger">
                                {{ Session::get('color_ext') }}
                            </div>
                        @endif
                        @if(Session::has('color_int'))
                            <div class="alert alert-danger">
                                {{ Session::get('color_int') }}
                            </div>
                        @endif
                        @if(Session::has('car_type'))
                            <div class="alert alert-danger">
                                {{ Session::get('car_type') }}
                            </div>
                        @endif
                        @if(Session::has('engine_cc'))
                            <div class="alert alert-danger">
                                {{ Session::get('engine_cc') }}
                            </div>
                        @endif
                        @if(Session::has('transmission'))
                            <div class="alert alert-danger">
                                {{ Session::get('transmission') }}
                            </div>
                        @endif
                        @if(Session::has('chassis_type'))
                            <div class="alert alert-danger">
                                {{ Session::get('chassis_type') }}
                            </div>
                        @endif
                        @if(Session::has('doors'))
                            <div class="alert alert-danger">
                                {{ Session::get('doors') }}
                            </div>
                        @endif
                        @if(Session::has('seats'))
                            <div class="alert alert-danger">
                                {{ Session::get('seats') }}
                            </div>
                        @endif
                        @if(Session::has('mileages'))
                            <div class="alert alert-danger">
                                {{ Session::get('mileages') }}
                            </div>
                        @endif
                        @if(Session::has('registration_import'))
                            <div class="alert alert-danger">
                                {{ Session::get('registration_import') }}
                            </div>
                        @endif
                        @if(Session::has('category_id'))
                            <div class="alert alert-danger">
                                {{ Session::get('category_id') }}
                            </div>
                        @endif
                        @if(Session::has('des_img'))
                            <div class="alert alert-danger">
                                {{ Session::get('des_img') }}
                            </div>
                        @endif
                        @if(Session::has('images'))
                            <div class="alert alert-danger">
                                {{ Session::get('images') }}
                            </div>
                        @endif
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Category</label><br>
                                <?php
                                $categories = \App\Models\Admin\Category::all();
                                ?>
                                <select name="category_id" class="form-control">
                                    
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                                @if($category->id == $product->cat_id) selected="selected" @endif>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Type</label><br>
                                <select class="form-control" name="status">

                                    <option value="-1">Select Type</option>
                                    <option value="Stock"
                                            {{isset($product) && $product->type == "Stock" ?"selected":''}}>Stock</option>
                                    <option value="Commercial"
                                            {{isset($product) && $product->type == "Commercial" ?"selected":''}}>Commercial</option>
                                    <option value="ForeignUsedCars"
                                            {{isset($product) && $product->type == "ForeignUsedCars" ?"selected":''}}>Foreign Used Cars</option>
                                    <option value="VehicleCommercials"
                                            {{isset($product) && $product->type == "VehicleCommercials" ?"selected":''}}>Vehicle Commercials</option>
                                    <option value="SpecialOffers"
                                            {{isset($product) && $product->type == "SpecialOffers" ?"selected":''}}>Special Offers</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Estimated Time Arrival</label><br>
                                <select class="form-control" name="estimated_time_arrival">

                                    <option value="-1">Select Estimated Time Arrival</option>
                                    <option value="1-Week"
                                            {{isset($product) && $product->estimated_time_arrival == "1-Week" ?"selected":''}}>1 Week</option>
                                    <option value="2-Week"
                                            {{isset($product) && $product->estimated_time_arrival == "2-Week" ?"selected":''}}>2 Weeks</option>
                                    <option value="3-Week"
                                            {{isset($product) && $product->estimated_time_arrival == "3-Week" ?"selected":''}}>3 Weeks</option>
                                    <option value="4-Week"
                                            {{isset($product) && $product->estimated_time_arrival == "4-Week" ?"selected":''}}>4 Weeks</option>
                                    <option value="1-Month+"
                                            {{isset($product) && $product->estimated_time_arrival == "1-Month+" ?"selected":''}}>1 Months+</option>
                                    <option value="2-Months+"
                                            {{isset($product) && $product->estimated_time_arrival == "2-Months+" ?"selected":''}}>2 Months+</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ref. No</label>
                                <input type="text" value="{{old('ref_no', $product->ref_no)}}" name="ref_no" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Make</label>
                                <input type="text" name="make" value="{{old('make', $product->make)}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Model</label>
                                <input type="text" name="model" value="{{old('model', $product->model)}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Version</label>
                                <input type="text" name="version" value="{{old('version', $product->version)}}" class="form-control">
                            </div>
                        </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Year</label>
                                <input type="text" name="version" value="{{old('year', $product->year)}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Color (Exterior)</label>
                                <input type="text" name="color_ext" value="{{old('color_ext', $product->color_ext)}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Color (Interior)</label>
                                <input type="text" name="color_int" value="{{old('color_int', $product->color_int)}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Car Type</label>
                                <input type="text" name="car_type" value="{{old('car_type', $product->car_type)}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Engine CC</label>
                                <input type="text" name="engine_cc" value="{{old('engine_cc', $product->engine_cc)}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Transmission</label>
                                <input type="text" name="transmission" value="{{old('transmission', $product->transmission)}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chassis Type</label>
                                <input type="text" name="chassis_type" value="{{old('chassis_type', $product->chassis_type)}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Doors</label>
                                <input type="text" name="doors" value="{{old('doors', $product->doors)}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Seats</label>
                                <input type="text" name="seats" value="{{old('seats', $product->seats)}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mileages</label>
                                <input type="text" name="mileages" value="{{old('mileages', $product->mileages)}}" class="form-control">
                            </div>
                        </div> <div class="col-md-6">
                            <div class="form-group">
                                <label>Registration/Import</label>
                                <input type="text" name="registration_import" value="{{old('registration_import', $product->registration_import)}}" class="form-control">
                            </div>
                        </div> <div class="col-md-6">
                            <div class="form-group">
                                <label>Availability</label>
                                <select name="availability" class="form-control">
                                    <option>Select Availability</option>
                                    <option value="1" <?php echo ($product->availability == 'available') ? 'selected' : ''; ?>>Available</option>
                                    <option value="2" <?php echo ($product->availability == 'not available') ? 'selected' : ''; ?>>Not Available</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Is New Arrival</label><br>
                                <input type="checkbox" name="is_new_arrival" <?php if ($product->is_fresh_arrival == 1) { echo 'checked="checked"'; } ?> class="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Is Featured</label><br>
                                <input type="checkbox" name="is_featured" <?php if ($product->is_featured_stock == 1) { echo 'checked="checked"'; } ?> class="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Auction Sheet</label><br>
                                <input type="file" name="des_img" class="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Images</label><br>
                                <input type="file" name="images[]" multiple class="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Manufactur Description</label>
                                
                                <input type="text" name="detail1" value="{{old('detail1', $product->detail)}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Select Status</label><br>
                                <select class="form-control" name="status">

                                    <option value="-1">Select Status</option>
                                    <option value="Active"
                                            {{isset($product) && $product->status == "Active" ?"selected":''}}>Active</option>
                                    <option value="Pending"
                                            {{isset($product) && $product->status == "Pending" ?"selected":''}}>Pending</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="5" id="detail" name="detail">
                                    {{$product->features}}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="" value="Update" class="btn btn-primary">
                                <a href="{{route('admin.products.index')}}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </form>
                    <script>
                        CKEDITOR.replace( 'detail' );
                       
                    </script>


                </div>
            </div>
        </div>
    </div>
@endsection
