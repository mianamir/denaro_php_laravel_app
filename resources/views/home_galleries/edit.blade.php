@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Home Gallery
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($homeGallery, ['route' => ['homeGalleries.update', $homeGallery->id], 'method' => 'patch']) !!}

                        @include('home_galleries.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection