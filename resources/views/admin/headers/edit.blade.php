@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Header
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">

                   <form action="{{route('admin.headers.update', [$header->id])}}" method="post" enctype="multipart/form-data">
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
                       {{--@if(Session::has('phone'))--}}
                           {{--<div class="alert alert-danger">--}}
                               {{--{{ Session::get('phone') }}--}}
                           {{--</div>--}}
                       {{--@endif--}}
                       {{--@if(Session::has('email'))--}}
                           {{--<div class="alert alert-danger">--}}
                               {{--{{ Session::get('email') }}--}}
                           {{--</div>--}}
                       {{--@endif--}}

                       {{--<div class="col-md-6">--}}
                           {{--<div class="form-group">--}}
                               {{--<label>Phone</label>--}}
                               {{--<input type="text" name="phone" value="{{old('phone', $header->phone)}}" class="form-control">--}}
                           {{--</div>--}}
                       {{--</div>--}}
                       {{--<div class="col-md-6">--}}
                           {{--<div class="form-group">--}}
                               {{--<label>Email</label>--}}
                               {{--<input type="text" name="email" value="{{old('email', $header->email)}}" class="form-control">--}}
                           {{--</div>--}}
                       {{--</div>--}}
                       {{--<div class="col-md-6">--}}
                           {{--<div class="form-group">--}}
                               {{--<label>Title</label>--}}
                               {{--<input type="text" name="url" value="{{old('url', $header->url)}}" class="form-control">--}}
                           {{--</div>--}}
                       {{--</div>--}}
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Logo</label><br>
                               <input type="file" name="logo" class="">
                           </div>
                       </div>
                       {{--<div class="col-md-6">--}}
                           {{--<div class="form-group">--}}
                               {{--<label>Image1</label><br>--}}
                               {{--<input type="file" name="image1" class="">--}}
                           {{--</div>--}}
                       {{--</div>--}}
                           {{--<div class="col-md-6">--}}
                               {{--<div class="form-group">--}}
                                   {{--<label>Image2</label><br>--}}
                                   {{--<input type="file" name="image2" class="">--}}
                               {{--</div>--}}
                           {{--</div>--}}

                       <div class="col-md-12">
                           <div class="form-group">
                               <input type="submit" name="" value="Update" class="btn btn-primary">
                               <a href="{{route('admin.headers.index')}}" class="btn btn-default">Cancel</a>
                           </div>
                       </div>
                   </form>



               </div>
           </div>
       </div>
   </div>
@endsection