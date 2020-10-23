@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            C E O
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cEO, ['route' => ['admin.cEOS.update', $cEO->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.c_e_o_s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection