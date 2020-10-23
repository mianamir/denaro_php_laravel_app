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

                    <form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
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
                        @if(Session::has('type'))
                            <div class="alert alert-danger">
                                {{ Session::get('type') }}
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
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Type</label><br>
                                <select class="form-control" name="type">

                                    <option value="-1">Select Type</option>
                                    <option value="Stock">Stock</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="ForeignUsedCars">Foreign Used Cars</option>
                                    <option value="VehicleCommercials">Vehicle Commercials</option>
                                    <option value="SpecialOffers">Special Offers</option>



                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Estimated Time Arrival</label><br>
                                <select class="form-control" name="estimated_time_arrival">

                                    <option value="-1">Select Estimated Time Arrival</option>
                                    <option value="1-Week">1 Week</option>
                                    <option value="2-Week">2 Weeks</option>
                                    <option value="3-Week">3 Weeks</option>
                                    <option value="4-Week">4 Weeks</option>
                                    <option value="1-Month+">1 Month+</option>
                                    <option value="2-Months+">2 Months+</option>



                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ref. No</label>
                                <input type="text" name="ref_no" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Make</label>
                                <input type="text" name="make" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Model</label>
                                <input type="text" name="model" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Version</label>
                                <input type="text" name="version" class="form-control">
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Year</label>
                                <input type="text" name="year" class="form-control">
                            </div>
                        </div>    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Color (Exterior)</label>
                                <input type="text" name="color_ext" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Color (Interior)</label>
                                <input type="text" name="color_int" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Car Type</label>
                                <input type="text" name="car_type" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Engine CC</label>
                                <input type="text" name="engine_cc" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Transmission</label>
                                <input type="text" name="transmission" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chassis Type</label>
                                <input type="text" name="chassis_type" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Doors</label>
                                <input type="text" name="doors" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Seats</label>
                                <input type="text" name="seats" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mileages</label>
                                <input type="text" name="mileages" class="form-control">
                            </div>
                        </div> <div class="col-md-6">
                            <div class="form-group">
                                <label>Registration/Import</label>
                                <input type="text" name="registration_import" class="form-control">
                            </div>
                        </div> <div class="col-md-6">
                            <div class="form-group">
                                <label>Availability</label>
                                <select name="availability" class="form-control">
                                    <option>Select Availability</option>
                                    <option value="1">Available</option>
                                    <option value="2">Not Available</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Is New Arrival</label><br>
                                <input type="checkbox" name="is_new_arrival" class="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Is Featured</label><br>
                                <input type="checkbox" name="is_featured" class="">
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
                                <label>Manufacturar Description</label>
                                 <input type="text" name="detail1" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="5" id="detail" name="detail"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="" value="Save" class="btn btn-primary">
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
