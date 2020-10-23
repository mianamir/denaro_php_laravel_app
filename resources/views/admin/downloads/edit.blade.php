@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Download
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($download, ['route' => ['admin.downloads.update', $download->id], 'method' => 'patch','files' => true]) !!}

                        @include('admin.downloads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection