@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Topic Video
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               @if(Session::has('video_url'))
                   <div class="alert alert-danger">
                       {{ Session::get('video_url') }}
                   </div>
               @endif
               @if(Session::has('featured_image'))
                    <div class="alert alert-danger">
                    {{ Session::get('featured_image') }}
                    </div>
               @endif
               @if(Session::has('featured_image'))
                    <div class="alert alert-danger">
                      {{ Session::get('featured_image') }}
                       </div>
               @endif

               <div class="row">
                   {!! Form::model($topic_video, ['route' => ['admin.topic_videos.update', $topic_video->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.topic_videos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection