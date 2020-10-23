@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Supplier
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">

                   <form action="{{route('admin.suppiers.update',['id'=>$suppier->id])}}" method="post" enctype="multipart/form-data">
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
                               <label>Name</label>
                               <input id="" name="name"
                                      value="{{old('name', $suppier)->name}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Email</label>
                               <input id="" name="email"
                                      value="{{old('email', $suppier)->email}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Phone</label>
                               <input id="" name="phone"
                                      value="{{old('phone', $suppier)->phone}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Address</label>
                               <input id="" name="address"
                                      value="{{old('address', $suppier)->address}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>City</label>
                               <input id="" name="city"
                                      value="{{old('city', $suppier)->city}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Country</label>
                               <input id="" name="country"
                                      value="{{old('country', $suppier)->country}}" type="text" class="form-control">
                           </div>
                       </div>

                       <div class="col-md-12">
                           <div class="form-group">
                               <label>Select Status</label><br>
                               <select class="form-control" name="status">

                                   <option value="-1">Select Status</option>
                                   <option value="Active"
                                           {{isset($suppier) && $suppier->status == "Active" ?"selected":''}}>Active</option>
                                   <option value="NotActive"
                                           {{isset($suppier) && $suppier->status == "NotActive" ?"selected":''}}>NotActive</option>
                                   {{--<option value="Deleted"--}}
                                           {{--{{isset($suppier) && $suppier->status == "Deleted" ?"selected":''}}>Deleted</option>--}}


                               </select>
                           </div>
                       </div>
                       <div class="col-md-12">
                           <div class="form-group">
                               <label>Image</label>

                               <input id="" name="image" value="" type="file" class="form-control"><br>
                               <img src="{{asset($suppier->image)}}" width="100" height="100"><br>
                           </div>
                       </div>

                       <div class="col-md-12">
                           <div class="form-group">
                               <input type="submit" name="" value="Update" class="btn btn-primary">
                               <a href="{{route('admin.suppiers.index')}}" class="btn btn-default">Cancel</a>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
@endsection