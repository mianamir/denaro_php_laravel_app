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
       <section class="home2 recent-project-section projectsec2">

           <div class="container">
               <div class="row">
                   <div class="col-lg-12 wdt-100">
{{--                       <h3 class="white-color">we are dealing</h3>--}}
                       <!--<a class="view-project-link" href="#">View All Projects</a>-->
                   </div>

                   @foreach($industrial_solutions_search_projects as $cate)
                       {{--            @if($category->parent_id == 0 and ($category->id != 14 or $category->id != 17))--}}
                       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img homeprj3-slide">

                           <div class="grid">
                               <div class="image-zoom-on-hover">
                                   <div class="gal-item">
                                       <a class="black-hover" href="#">
                                           <img class="img-full img-responsive" src="{{$cate->image}}" alt="{{$cate->name}}">
                                           <div class="tour-layer delay-1"></div>
                                           <div class="vertical-align">
                                               <div class="border">
                                                   <h5>{{$cate->name}}</h5>
                                               </div>
                                               <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View More</span></div>
                                           </div>
                                       </a>
                                   </div>
                               </div>
                           </div>
                           <h4>{{$category->name}}</h4>

                       </div>
                       {{--            @endif--}}
                   @endforeach


               </div>
           </div>
       </section>

   </div>


@endsection
