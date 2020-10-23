@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Contact
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <form action="{{route('admin.email.setting.update', [$contact->id])}}" method="post" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">

                       @if(Session::has('name'))
                           <div class="alert alert-danger">
                               {{ Session::get('name') }}
                           </div>
                       @endif


                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Email</label>
                               <input id="" name="email" value="{{old('email', $contact->email)}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Password</label>
                               <input id="" name="password2" value="{{old('password2', $contact->password2)}}" type="password" class="form-control">
                           </div>
                       </div>

                       <div class="col-md-12">
                           <div class="form-group">
                               <input type="submit" name="" value="Update" class="btn btn-primary">
                               <a href="{{route('admin.email.setting')}}" class="btn btn-default">Cancel</a>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
@endsection