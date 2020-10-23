@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Class Subject
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classSubject, ['route' => ['admin.classSubjects.update', $classSubject->id], 'method' => 'patch']) !!}

                        @include('admin.class_subjects.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection