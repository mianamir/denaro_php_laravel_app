@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Student Class
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($studentClass, ['route' => ['admin.studentClasses.update', $studentClass->id], 'method' => 'patch']) !!}

                        @include('admin.student_classes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection