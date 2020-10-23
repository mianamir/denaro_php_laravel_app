@extends('layouts.app')

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
                   {!! Form::model($header, ['route' => ['headers.update', $header->id], 'method' => 'patch']) !!}

                        @include('headers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection