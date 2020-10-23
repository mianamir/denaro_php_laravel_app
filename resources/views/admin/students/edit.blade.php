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
               @if(Session::has('student_email'))
                   <div class="alert alert-danger">
                       {{ Session::get('student_email') }}
                   </div>
               @endif
               @if(Session::has('student_phone'))
                   <div class="alert alert-danger">
                       {{ Session::get('student_phone') }}
                   </div>
               @endif

               <div class="row">
                   {!! Form::model($student, ['route' => ['admin.students.update', $student->id], 'files' => true,'method' => 'patch']) !!}

                        @include('admin.students.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection