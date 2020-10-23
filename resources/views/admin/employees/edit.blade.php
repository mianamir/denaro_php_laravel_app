@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Student
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <form action="{{route('admin.employees.update', [$employee->id])}}" method="post" enctype="multipart/form-data">
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
                       @if(Session::has('email'))
                           <div class="alert alert-danger">
                               {{ Session::get('email') }}
                           </div>
                       @endif
                       @if(Session::has('phone'))
                           <div class="alert alert-danger">
                               {{ Session::get('phone') }}
                           </div>
                       @endif
                       @if(Session::has('address'))
                           <div class="alert alert-danger">
                               {{ Session::get('address') }}
                           </div>
                       @endif
                       @if(Session::has('city'))
                           <div class="alert alert-danger">
                               {{ Session::get('city') }}
                           </div>
                       @endif
                       @if(Session::has('country'))
                           <div class="alert alert-danger">
                               {{ Session::get('country') }}
                           </div>
                       @endif
                       @if(Session::has('image'))
                           <div class="alert alert-danger">
                               {{ Session::get('image') }}
                           </div>
                       @endif

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Reg. No#</label>
                               <input id="" name="reg_no" value="{{old('reg_no', $employee->reg_no)}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Full Name</label>
                               <input id="" name="full_name" value="{{old('full_name', $employee->full_name)}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Gender</label><br>
                               <select class="form-control" name="gender">

                                   {{--<option value="-1">Select Gender</option>--}}
                                   <option value="Male"
                                           {{isset($employee) &&
                                           $employee->status == "Male"?"selected":''}}>Male</option>
                                   <option value="Female"
                                           {{isset($employee) &&
                                           $employee->status == "Female" ?"selected":''}}>Female</option>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Date of Birth</label>
                               <input id="" name="dob" value="{{old('dob', $employee->dob)}}" type="date" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Place Of Birth</label>
                               <input id="" name="place_of_birth" value="{{old('place_of_birth', $employee->place_of_birth)}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Religion</label>
                               <input id="" name="religion" value="{{old('religion', $employee->religion)}}" type="text" class="form-control">
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Sect</label>
                               <input id="" name="sect" type="text" value="{{old('sect', $employee->sect)}}" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Nationality</label>
                               <input id="" name="nationality" value="{{old('nationality', $employee->nationality)}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Latest School Attended</label>
                               <input id="" name="latest_school_attended" value="{{old('latest_school_attended', $employee->latest_school_attended)}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Names of Real Brothers/Sisters at PPS</label>
                               <input id="" name="names_of_real_brothers_sisters_pps" value="{{old('names_of_real_brothers_sisters_pps', $employee->names_of_real_brothers_sisters_pps)}}" type="text" class="form-control">
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Fathers's Name</label>
                               <input id="" name="fathers_name" value="{{old('fathers_name', $employee->fathers_name)}}" type="text" class="form-control">
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>CNIC</label>
                               <input id="" name="cnic"  value="{{old('cnic', $employee->cnic)}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Valid Email ID</label>
                               <input id="" name="email" type="text" value="{{old('email', $employee->email)}}" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Qualifications</label>
                               <input id="" name="qualifications" value="{{old('qualifications', $employee->qualifications)}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Occupation</label>
                               <input id="" name="occupation" value="{{old('occupation', $employee->occupation)}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Office Address</label>
                               <input id="" name="office_address"  value="{{old('office_address', $employee->office_address)}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Present Home Address</label>
                               <input id="" name="present_home_address"  value="{{old('present_home_address', $employee->present_home_address)}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Permanent Home Address</label>
                               <input id="" name="permanent_home_address" value="{{old('permanent_home_address', $employee->permanent_home_address)}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Office Phone No</label>
                               <input id="" name="office_phone_no" value="{{old('office_phone_no', $employee->office_phone_no)}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Present Home Phone No</label>
                               <input id="" name="present_home_phone_no" value="{{old('present_home_phone_no', $employee->present_home_phone_no)}}" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Guardian Name</label>
                               <input id="" name="name" type="text" value="{{old('name', $employee->name)}}" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Guardian Relation</label>
                               <input id="" name="name_parents_guardian" value="{{old('name_parents_guardian', $employee->name_parents_guardian)}}" type="text" class="form-control">
                           </div>
                       </div>


                       <div class="col-md-12">
                           <div class="form-group">
                               <input type="submit" name="" value="Save" class="btn btn-primary">
                               <a href="{{route('admin.employees.index')}}" class="btn btn-default">Cancel</a>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
@endsection