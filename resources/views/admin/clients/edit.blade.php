@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Partners/Clients
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($client, ['route' => ['admin.clients.update', $client->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.clients.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection