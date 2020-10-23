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
<!--=========home banner start============-->
<div class="banner clearfix">

    <div class="slideshow" >
        <!-- slider revolution start -->
        <!-- ================ -->
        <div class="slider-banner-container">
            <div class="slider-banner-fullscreen">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $banners = \App\Models\Admin\Banner::orderBy('order_image','ASC')->get();

                        $active = false;
                        ?>
                        @foreach($banners as $banner)
                        <div class="item {{!$active ? 'active' : ''}}">
                            <img src="{{$banner->image}}" alt="slidebg1">
                            <div class="carousel-caption">
                                <h3 class=" object-non-visible" data-animation="animated fadeInLeft" style="color:#fff;">{{$banner->title}}</h3>
                                <p class=" object-non-visible" data-animation="animated fadeInRight">{{$banner->button_text}}</p>

                            </div>
                        </div>
                            <?php $active = true; ?>
                        @endforeach


                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
            <!-- slider revolution end -->

        </div>
        <!-- slideshow end -->

    </div>

</div>

<!--=========home banner end============-->
<?php
$home_page = \App\Models\Admin\Page::where('name', 'home')->first();
?>
<div class="gray">
<section class="pad20-45-top-bottom get_in_02">
    <div class="container" align="center">
        <div class="row">
            <h2>{{$home_page->title}}</h2>
            <p>{!! $home_page->details !!}</p>
        </div>
    </div>
</section>
</div>



<!--=========High Quality Start============-->


<section class="home2 recent-project-section projectsec2">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 wdt-100">
                <h3 class="white-color">we are dealing</h3>
                <!--<a class="view-project-link" href="#">View All Projects</a>-->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img homeprj3-slide">

                <div class="grid">
                    <div class="image-zoom-on-hover">
                        <div class="gal-item">
                            <a class="black-hover" href="#">
                                <img class="img-full img-responsive" src="images/home1-images/1.jpg" alt="Project1">
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-align">
                                    <div class="border">
                                        <h5>Food &amp; beverages</h5>
                                    </div>
                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View More</span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <h4>Food &amp; beverages</h4>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img homeprj3-slide">
                <div class="grid">
                    <div class="image-zoom-on-hover">
                        <div class="gal-item">
                            <a class="black-hover" href="#">
                                <img class="img-full img-responsive" src="images/home1-images/2.jpg" alt="Project1">
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-align">
                                    <div class="border">
                                        <h5>Cosmetics</h>
                                    </div>
                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View More</span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <h4>Cosmetics</h4>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img homeprj3-slide">
                <div class="grid">
                    <div class="image-zoom-on-hover">
                        <div class="gal-item">
                            <a class="black-hover" href="#">
                                <img class="img-full img-responsive" src="images/home1-images/3.jpg" alt="Project1">
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-align">
                                    <div class="border">
                                        <h5>Pharmaceuticals</h5>
                                    </div>
                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View More</span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <h4>Pharmaceuticals</h4>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img homeprj3-slide">
                <div class="grid">
                    <div class="image-zoom-on-hover">
                        <div class="gal-item">
                            <a class="black-hover" href="#">
                                <img class="img-full img-responsive" src="images/home1-images/4.jpg" alt="Project1">
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-align">
                                    <div class="border">
                                        <h5>Plastics </h5>
                                    </div>
                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View More</span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <h4>Plastics </h4>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img homeprj3-slide">

                <div class="grid">
                    <div class="image-zoom-on-hover">
                        <div class="gal-item">
                            <a class="black-hover" href="#">
                                <img class="img-full img-responsive" src="images/home1-images/5.jpg" alt="Project1">
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-align">
                                    <div class="border">
                                        <h5>Local/Imported Warehouse solutions</h5>
                                    </div>
                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View More</span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <h4>Local/Imported Warehouse solutions</h4>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img homeprj3-slide">
                <div class="grid">
                    <div class="image-zoom-on-hover">
                        <div class="gal-item">
                            <a class="black-hover" href="#">
                                <img class="img-full img-responsive" src="images/home1-images/6.jpg" alt="Project1">
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-align">
                                    <div class="border">
                                        <h5>Offices & Educational Sector</h5>
                                    </div>
                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View More</span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <h4>Offices & Educational Sector</h4>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img homeprj3-slide">
                <div class="grid">
                    <div class="image-zoom-on-hover">
                        <div class="gal-item">
                            <a class="black-hover" href="#">
                                <img class="img-full img-responsive" src="images/home1-images/7.jpg" alt="Project1">
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-align">
                                    <div class="border">
                                        <h5>Raw Material</h5>
                                    </div>
                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View More</span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <h4>Raw Material</h4>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img homeprj3-slide">
                <div class="grid">
                    <div class="image-zoom-on-hover">
                        <div class="gal-item">
                            <a class="black-hover" href="#">
                                <img class="img-full img-responsive" src="images/home1-images/8.jpg" alt="Project1">
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-align">
                                    <div class="border">
                                        <h5>Aerosol Can</h5>
                                    </div>
                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View More</span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <h4>Aerosol Can</h4>
            </div>


        </div>
    </div>
</section>

<!--=========Footer Start============-->
<footer>
    <div class="yellow-background solution-available text-center">
        <div class="container">
            <h5>For Any Solution We Are <span>Available</span> For You</h5>
            <a data-animation="animated fadeInUp" class="header-requestbtn contactus-btn hvr-bounce-to-right" href="#.html">Projects</a>
        </div>
    </div>
</footer>
<!--=========Recent Project Start============-->
<section class="home3 recent-project-section">
    <div class="container">
        <h3>Industrial Solutions </h3>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="all">
                <div class="full_wrapper carousel slide three_shows_one_move home2-project" id="our_project" data-ride="carousel">
                    <div class="controls"> <a class="left fa fa-angle-left next_prve_control" href="#our_project" data-slide="prev"></a><a class="right fa fa-angle-right next_prve_control" href="#our_project" data-slide="next"></a> </div>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img ">
                                <div class="grid">
                                    <div class="image-zoom-on-hover">
                                        <div class="gal-item">
                                            <a class="black-hover" href="#">
                                                <img class="img-full img-responsive" src="images/solutions/filling-machine.jpg" alt="">
                                                <div class="tour-layer delay-1"></div>
                                                <div class="vertical-align">
                                                    <div class="border">
                                                        <h5>Filling Machines </h5>
                                                    </div>
                                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img ">
                                <div class="grid">
                                    <div class="image-zoom-on-hover">
                                        <div class="gal-item">
                                            <a class="black-hover" href="#">
                                                <img class="img-full img-responsive" src="images/solutions/inspection-machine.jpg" alt="">
                                                <div class="tour-layer delay-1"></div>
                                                <div class="vertical-align">
                                                    <div class="border">
                                                        <h5>Inspection Machines</h5>
                                                    </div>
                                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img ">
                                <div class="grid">
                                    <div class="image-zoom-on-hover">
                                        <div class="gal-item">
                                            <a class="black-hover" href="#">
                                                <img class="img-full img-responsive" src="images/solutions/packing-laeling-machine.jpg" alt="">
                                                <div class="tour-layer delay-1"></div>
                                                <div class="vertical-align">
                                                    <div class="border">
                                                        <h5>Packaging and labeling Machines</h5>
                                                    </div>
                                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img ">
                                <div class="grid">
                                    <div class="image-zoom-on-hover">
                                        <div class="gal-item">
                                            <a class="black-hover" href="#">
                                                <img class="img-full img-responsive" src="images/solutions/packing-automation.jpg" alt="">
                                                <div class="tour-layer delay-1"></div>
                                                <div class="vertical-align">
                                                    <div class="border">
                                                        <h5>Packing Automation</h5>
                                                    </div>
                                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img ">
                                <div class="grid">
                                    <div class="image-zoom-on-hover">
                                        <div class="gal-item">
                                            <a class="black-hover" href="#">
                                                <img class="img-full img-responsive" src="images/solutions/warehouse-equipment.jpg" alt="">
                                                <div class="tour-layer delay-1"></div>
                                                <div class="vertical-align">
                                                    <div class="border">
                                                        <h5>Warehouse Equipment</h5>
                                                    </div>
                                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img ">
                                <div class="grid">
                                    <div class="image-zoom-on-hover">
                                        <div class="gal-item">
                                            <a class="black-hover" href="#">
                                                <img class="img-full img-responsive" src="images/solutions/printing-machine.jpg" alt="">
                                                <div class="tour-layer delay-1"></div>
                                                <div class="vertical-align">
                                                    <div class="border">
                                                        <h5>Printing Machines</h5>
                                                    </div>
                                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img ">
                                <div class="grid">
                                    <div class="image-zoom-on-hover">
                                        <div class="gal-item">
                                            <a class="black-hover" href="#">
                                                <img class="img-full img-responsive" src="images/solutions/wrapping-machine.jpg" alt="">
                                                <div class="tour-layer delay-1"></div>
                                                <div class="vertical-align">
                                                    <div class="border">
                                                        <h5>Wrapping Machines</h5>
                                                    </div>
                                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img ">
                                <div class="grid">
                                    <div class="image-zoom-on-hover">
                                        <div class="gal-item">
                                            <a class="black-hover" href="#">
                                                <img class="img-full img-responsive" src="images/solutions/production-line.jpg" alt="">
                                                <div class="tour-layer delay-1"></div>
                                                <div class="vertical-align">
                                                    <div class="border">
                                                        <h5>Production Lines</h5>
                                                    </div>
                                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--=========Recent Project end============-->


<!--=========Testimonial Start============-->
<section class="pad20-45-top-bottom home3_testimonial carousel slide two_shows_one_move common_testimonial_01" id="var_testimonial" data-ride="carousel">
    <div class="container">

        <div class="col-md-6 col-sm-6 col-xs-12">
            <h3 class=" text-center">Videos</h3>
            <img class="img-full img-responsive" src="images/video.jpg" alt="">

        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">


            <h3 class=" text-center">News Updates</h3>
            <div class="clearfix">&nbsp;</div>
            <marquee scrollamount="4" onmouseover=this.stop() onmouseout=this.start() direction="up">
                <blockquote class="margin-clear">
                    <p>Design is not just what it looks like and feels like. Design is how it works.</p>
                    <footer><cite title="Source Title">Steve Jobs </cite></footer>
                </blockquote>
                <blockquote class="margin-clear">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolorem.</p>
                    <footer><cite title="Source Title">Steve Doe </cite></footer>
                </blockquote>
                <blockquote class="margin-clear">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolorem.</p>
                    <footer><cite title="Source Title">Steve Doe </cite></footer>
                </blockquote>
            </marquee>



        </div>
    </div>
</section>

<div class="clearfix">&nbsp;</div>

<div class="container">
    <h3 align="center">Our Partners/ Our Clients</h3>
    <section class="customer-logos slider">
        <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
        <div class="slide"><img src="http://www.webcoderskull.com/img/logo.png"></div>
        <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
        <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
        <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
        <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
        <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
        <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
        <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
        <div class="clearfix">&nbsp;</div>
    </section>
</div>


@endsection