@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            {!! isset($chapter) ? $chapter->title : "Not Available" !!} / topic
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($topic, ['route' => ['admin.topics.update', $topic->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.topics.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection