@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Certification
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($certification, ['route' => ['admin.certifications.update', $certification->id], 'method' => 'patch']) !!}

                        @include('admin.certifications.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection