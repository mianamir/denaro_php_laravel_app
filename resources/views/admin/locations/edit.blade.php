@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Location
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($location, ['route' => ['admin.locations.update', $location->id], 'method' => 'patch','files' => true ]) !!}

                        @include('admin.locations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection