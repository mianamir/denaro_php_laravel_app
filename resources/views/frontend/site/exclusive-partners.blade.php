@extends('frontend.layouts.denaro')
@section('title')
    {!!$content->title!!}
@endsection
@section('keywords')
    {!!$content->met_keywords!!}
@endsection
@section('description')
    {!!$content->meta_description!!}
@endsection
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

       <div class="clearfix">&nbsp;</div>

       <div class="container">
           <h3 style="text-align: center; font-weight: normal;">Our Partners/ Our Clients</h3>
           <section class="customer-logos slider">
               <?php
               $clients = \App\Models\Admin\Client::orderBy('created_at', 'DESC')->get();
               ?>
               @foreach($clients as $client)
                   <div class="slide"><img src="{{$client->image}}"></div>
               @endforeach
               <div class="clearfix">&nbsp;</div>
           </section>
       </div>

   </div>


@endsection
