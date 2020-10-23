@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Teacher
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">

                   <form action="{{route('admin.teachers.update', [$teacher->id])}}" method="post" enctype="multipart/form-data">
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
                       @if(Session::has('name'))
                           <div class="alert alert-danger">
                               {{ Session::get('name') }}
                           </div>
                       @endif
                       @if(Session::has('fathername'))
                           <div class="alert alert-danger">
                               {{ Session::get('fathername') }}
                           </div>
                       @endif
                       @if(Session::has('contact1'))
                           <div class="alert alert-danger">
                               {{ Session::get('contact1') }}
                           </div>
                       @endif
                       @if(Session::has('contact2'))
                           <div class="alert alert-danger">
                               {{ Session::get('contact2') }}
                           </div>
                       @endif
                       @if(Session::has('email'))
                           <div class="alert alert-danger">
                               {{ Session::get('email') }}
                           </div>
                       @endif
                       @if(Session::has('qualificatioon'))
                           <div class="alert alert-danger">
                               {{ Session::get('qualificatioon') }}
                           </div>
                       @endif
                       @if(Session::has('subject_to_teach'))
                           <div class="alert alert-danger">
                               {{ Session::get('subject_to_teach') }}
                           </div>
                       @endif
                       @if(Session::has('experience'))
                           <div class="alert alert-danger">
                               {{ Session::get('experience') }}
                           </div>
                       @endif
                       @if(Session::has('username'))
                           <div class="alert alert-danger">
                               {{ Session::get('username') }}
                           </div>
                       @endif
                       @if(Session::has('password'))
                           <div class="alert alert-danger">
                               {{ Session::get('password') }}
                           </div>
                       @endif
                       @if(Session::has('country'))
                           <div class="alert alert-danger">
                               {{ Session::get('country') }}
                           </div>
                       @endif
                       @if(Session::has('city'))
                           <div class="alert alert-danger">
                               {{ Session::get('city') }}
                           </div>
                       @endif
                       @if(Session::has('cnic'))
                           <div class="alert alert-danger">
                               {{ Session::get('cnic') }}
                           </div>
                       @endif
                       @if(Session::has('status'))
                           <div class="alert alert-danger">
                               {{ Session::get('status') }}
                           </div>
                       @endif
                       @if(Session::has('payment_plan_id'))
                           <div class="alert alert-danger">
                               {{ Session::get('payment_plan_id') }}
                           </div>
                       @endif
                       {{--@if(Session::has('profile_pic'))--}}
                           {{--<div class="alert alert-danger">--}}
                               {{--{{ Session::get('profile_pic') }}--}}
                           {{--</div>--}}
                       {{--@endif--}}



                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Name</label>
                               <input type="text" value="{{old('name', $teacher->name)}}" name="name" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Father Name</label>
                               <input type="text" value="{{old('fathername', $teacher->fathername)}}" name="fathername" class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Contact1</label>
                               <input type="text" value="{{old('contact1', $teacher->contact1)}}" name="contact1" class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Contact2</label>
                               <input type="text" value="{{old('contact2', $teacher->contact2)}}" name="contact2" class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Email</label>
                               <input type="email" value="{{old('email', $teacher->email)}}" name="email" class="form-control" required>
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Qualification</label>
                               <input type="text" value="{{old('qualificatioon', $teacher->qualificatioon)}}" name="qualificatioon" class="form-control" required>
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Course To Teach</label><br>
                               <?php
                               $course_to_teaches = \App\Models\Admin\CourseToTeach::all();
                               ?>
                               <select name="course_to_teach_id" class = "form-control">
                                   @foreach($course_to_teaches as $course_to_teach)
                                       <option value="{{$course_to_teach->id}}" @if(isset($teacher) && $course_to_teach->id == $teacher->course_to_teach_id) selected="selected" @endif>{{$course_to_teach->title}}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Experience</label>
                               <input type="text" value="{{old('experience', $teacher->experience)}}" name="experience" class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>User Name</label>
                               <input type="text" value="{{old('username', $teacher->username)}}" name="username" class="form-control" readonly>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Password</label>
                               <input type="password" value="{{old('password2', $teacher->password2)}}" name="password" class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Country</label>
                               <input type="text" value="{{old('country', $teacher->country)}}" name="country" class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>City</label>
                               <input type="text" value="{{old('city', $teacher->city)}}" name="city" class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>CNIC</label>
                               <input type="text" value="{{old('cnic', $teacher->cnic)}}" name="cnic" class="form-control" required>
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Status</label><br>
                               <select class="form-control" name="status" required>

                                   <option value="active"
                                           {{isset($teacher) && $teacher->status == "active" ?"selected":''}}>Active</option>
                                   <option value="inactive"
                                           {{isset($teacher) && $teacher->status == "inactive" ?"selected":''}}>InActive</option>

                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Payment Plan</label><br>
                               <?php
                               $payment_plans = \App\Models\Admin\PaymentPlan::all()
                               ?>
                               <select class="form-control" name="payment_plan_id" required>
                                   @foreach($payment_plans as $payment_plan)
                                   <option value="{{$payment_plan->id}}" @if($payment_plan->id == $teacher->payment_plan_id) selected="selected" @endif>
                                       Rs. {{$payment_plan->price}}/{{$payment_plan->duration}}
                                   </option>
                                   @endforeach
                               </select>
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Profile Image</label><br>
                               <p><img src="{{asset('teachers/'.$teacher->profile_pic)}}" width="100" height="100"></p><br>
                               <p>Or upload new image</p>
                               <input type="file" name="profile_pic" class="">
                           </div>
                       </div>

                       <div class="col-md-12">
                           <div class="form-group">
                               <input type="submit" name="" value="Save" class="btn btn-primary">
                               <a href="{{route('admin.teachers.index')}}" class="btn btn-default">Cancel</a>
                           </div>
                       </div>
                   </form>


               </div>
           </div>
       </div>
   </div>
@endsection