@extends('frontend.layouts.denaro')

@section('content')
    <img src="{{$content->image}}"/>
   <div class="container">
       <br/><br/>
       <div class="row">
           <div class="col-md-12">
               <h2 style="text-align: center">{{$content->title}}</h2>
                <p>{!! $content->details !!}</p>
           </div>
       </div>

       <br/><br/>
        <div class="row">
            <?php
            $video_galleries = \App\Models\Admin\Gallery::get();
            ?>
            @foreach($video_galleries as $video_gallery)
            <div class="col-md-3">
                <iframe width="250" height="250" src="https://www.youtube.com/embed/{{$video_gallery->name}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
            @endforeach

        </div>

       <br/><br/>

   </div>


@endsection
