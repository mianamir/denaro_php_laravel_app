@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Image Gallery Category
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($brandType, ['route' => ['admin.brandTypes.update', $brandType->id], 'method' => 'patch']) !!}

                        @include('admin.brand_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection