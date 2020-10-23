@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Course Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($subjectType, ['route' => ['admin.subjectTypes.update', $subjectType->id], 'method' => 'patch']) !!}

                        @include('admin.subject_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection