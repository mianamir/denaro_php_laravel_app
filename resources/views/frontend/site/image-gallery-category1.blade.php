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

       <div class="gray"><section class="pad20-45-top-bottom get_in_02">
               <?php
               $image_gallery_categories = \App\Models\Admin\BrandType::get();
               ?>
               <div class="row">
                   <div class="container">
                       @foreach($image_gallery_categories as $c)
                           <div class="col-md-3">
                               <a href="{{route('frontend.image.gallery1', $c->id)}}"><h4>{{$c->name}}</h4></a>
                           </div>
                       @endforeach

                   </div>

               </div>
           </section>
       </div>

       <div class="clearfix">&nbsp;</div>

   </div>


@endsection
