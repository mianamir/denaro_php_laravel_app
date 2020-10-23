@extends('frontend.layouts.virtual_school')
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
       <div class="row">
           <div class="col-md-12">
               <h2>{{$content->title}}</h2>
                <p>{!! $content->details !!}</p>
           </div>
       </div>

   </div>


@endsection
