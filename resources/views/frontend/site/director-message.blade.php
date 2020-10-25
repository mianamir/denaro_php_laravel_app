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

   </div>


@endsection
