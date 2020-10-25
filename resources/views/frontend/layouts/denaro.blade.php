<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DENARO International Traders</title>
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive-style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/effect_style.css')}}">
    <link href="{{asset('assets/css/responsive_bootstrap_carousel.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/set1.css')}}" />
</head>
<body>
<!--=========header start============-->
<header class="header2">
    <div class="container">
        <div class="row">
            <?php
            $header = \App\Models\Admin\Header::find(1);

            ?>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 display-block ">
                <a href="{{url('/')}}" class="logo"><img src="{{$header->logo}}" class="img-responsive" alt="logo"></a>
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12 pull-right" >
                <ul class="header-info">
                    <li class="address"> {{$header->phone}} <!--<br/> Washington DC, USA--></li>
                    <li class="phn"><!--+1 (123) 456-7890<br/>--><a href="mailto:{{$header->email}}">{{$header->email}}</a></li>

                    <!--<div class="language">
                                      <p>Translator here</p>
                                      </div>
                                      <div class="header-socials display-block">
                                         <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                         <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                         <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                      </div>-->
            </div>
        </div>
    </div>
    <nav id="main-navigation-wrapper" class="navbar navbar-default navbar2-wrap ">
        <div class="container">
            <div class="navbar-header">
                <div class="logo-menu"><img src="{{asset('assets/images/white-logo.png')}}" alt="logo"></div>
                <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="var2-nav">
                <div id="main-navigation" class="collapse navbar-collapse ">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <a href="{{url('/')}}" class="active">Home</a>

                        </li>

                        <li class="dropdown">
                            <a href="{{route('frontend.about')}}">About Us</a>

                        </li>


                        <li class="dropdown ">
                            <a href="">Sectors We Deal</a>
                            <ul class="dropdown-submenu">
                                <li><a href="food-beverages.html">Food & Beverages</a></li>
                                <li><a href="cosmetics.html">Cosmetics</a></li>
                                <li><a href="pharmaceuticals.html">Pharmaceuticals</a></li>
                                <li><a href="plastics.html">Plastics </a></li>
                                <li><a href="daily-chemicals.html">Daily Chemicals </a></li>
                                <li><a href="local-imported-warehouse-solutions-sector.html">Local/Imported Warehouse solutions </a></li>
                                <li><a href="offices-educational-sector.html">Offices & Educational Sector </a></li>
                            </ul>
                        </li>
                        <li class="dropdown ">
                            <a href="index.html" >Industrial Solutions</a>
                            <ul class="dropdown-submenu">
                                <li><a href="filling-machines.html">Filling Machines </a></li>
                                <li><a href="inspection-machines.html">Inspection Machines</a></li>
                                <li><a href="packing-labeling-machines.html">Packaging and labeling Machines</a></li>
                                <li><a href="packing-automation-machines.html">Packing Automation </a></li>
                                <li><a href="warehouse-equipment.html">Warehouse Equipment </a></li>
                                <li><a href="local-imported-warehouse-solutions.html">Local/Imported Warehouse solutions </a></li>
                                <li><a href="offices-educational-sector-solution.html">Offices & Educational Sector </a></li>
                                <li><a href="printing-machines.html">Printing Machines</a>
                                <li><a href="wrapping-machines.html">Wrapping Machines</a>
                                <li><a href="production-lines.html">Production Lines</a>
                                <li><a href="capping-macines.html">Capping Machines</a>
                                <li><a href="turkey-solutions.html">Turnkey Solutions.</a>
                                <li><a href="raw-materials.html">Raw Materials</a>
                                <li><a href="gable-top-packing.html">Gable Top Packaging</a>
                                <li><a href="brick-packaging.html">Brick Packaging</a>
                                <li><a href="aerosol-gans.html">Aerosol Cans</a>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="real-estate.html">Products/Services</a>
                            <ul class="dropdown-submenu">
                                <li><a href="contract-manufacturing.html">Contract Manufacturing</a></li>
                                <li><a href="prjects-consultancy-services.html">Projects Consultancy Services</a></li>
                                <li><a href="commissioing-services.html">After Sale Commissioning &amp; Services</a></li>
                                <li><a href="medical-sugical-equipment.html">Medical/Surgical Equipments</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('frontend.exclusive.partners')}}">Exclusive Partners</a>

                        </li>
                        <li class="dropdown">
                            <a href="{{route('frontend.image.gallery.category1')}}">Gallery</a>

                        </li>
{{--                        <li class="dropdown">--}}
{{--                            <a href="{{route('frontend.site.video.gallery.search')}}">Video</a>--}}

{{--                        </li>--}}


                    </ul>
                    <div class="search-column search-fl">
                        <button name="button" type="button" class="search-btn"  data-toggle="modal" data-target=".bs-example-modal-lg"></button>
                    </div>
                    <a class="header-requestbtn header2-requestbtn hvr-bounce-to-right" href="{{route('frontend.contact')}}">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--=========header end============-->
@yield("content")


<!-- Social Media-->
<div class="sociallinks">
    <ul>
        <li><a href="https://www.facebook.com/" title="Facebook" target="new"><div></div></a></li>
        <li><a href="https://twitter.com/" title="Twitter" target="new"><div></div></a></li>
        <li><a href="http://linkedin.com/" title="Linkedin" target="new"><div></div></a></li>
    </ul>
</div>
<style>
    .sociallinks{position:fixed;top:30%;left:0px;width:30px;height:216px;background:url('{{asset('assets/images/sociallinks.png')}}') no-repeat scroll center center transparent; z-index: 99}
    }
    .sociallinks ul{list-style:none;}
    .sociallinks ul li{width:30px;height:72px;padding:0px 0px;}
    .sociallinks ul li div{width:30px;height:72px; margin-left:-40px;}
    @media only screen and (max-width : 300px) {
        .sociallinks{display:none;}
</style>
<!-- Social Media ends-->






<!--=========Testimonial end============-->
<footer>
    <div class="ftr-section">
        <div class="container">
            <?php
            $ceo_message_home_footer = \App\Models\Admin\Page::where('name', 'ceo_message_home_footer')->first();
            $black_logo_home_footer = \App\Models\Admin\Page::where('name', 'black_logo_home_footer')->first();
            ?>
            <div class="row">
                <div class="col-md-7 col-sm-4 col-xs-12  ftr-about-text">
                    <h6>{{$ceo_message_home_footer->title}}</h6>
                    <p class="marbtm20 line-height26" style="text-align:justify;"> <em><img align="left" hspace="15px" class="margin-b-20" src="{{ $ceo_message_home_footer->image }}" alt=""></em>
                        {!! $ceo_message_home_footer->details !!}
                    </p>
                    <a class="ftr-read-more" href="{{route('frontend.director.message')}}">Read More</a>
                </div>a

                <div class="col-md-2 col-sm-4 col-xs-12 ftr-link-column">
                    <h6>Cool Links</h6>
                    <ul class="footer-link">
                        <li><a href="{{url('/')}}">- Home</a></li>
                        <li><a href="{{route('frontend.about')}}">- About Us</a></li>
                        <li><a href="{{route('frontend.director.message')}}">- Director Message</a></li>
                        <li><a href="{{route('frontend.faq')}}">- FAQ</a></li>
                        <li><a href="{{route('frontend.vision')}}">- Vision / Mission</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 ftr-follow-column pull-right">
                    <h6>Follow Us</h6>
                    <?php
                    $facebook = \App\Models\Admin\SocialIcon::where('name', 'facebook')->first();
                    $twitter = \App\Models\Admin\SocialIcon::where('name', 'twitter')->first();
                    $linkedin = \App\Models\Admin\SocialIcon::where('name', 'linkedin')->first();
                    $youtube = \App\Models\Admin\SocialIcon::where('name', 'youtube')->first();
                    $instagram = \App\Models\Admin\SocialIcon::where('name', 'instagram')->first();
                    ?>
                    <div class="header-socials footer-socials">
                        <a href="{{$facebook->url}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="{{$twitter->url}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="{{$linkedin->url}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="{{$youtube->url}}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        <a href="{{$instagram->url}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                    <span class="ftr-logo img"><img src="{{$black_logo_home_footer->image}}" class="img-responsive" alt="logo-image"></span>
                </div>
            </div>
            <div class="footer-btm">
                <div class="col-md-6 col-sm-6 col-xs-12 pad-left_zero pad-right_zero size">
                    <p>Copyright © 2020 Denaro Int. All Rights Reserved.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 pad-left_zero pad-right_zero pull-right">
                    <p class="text-right">Developed by: <a href="https://www.infotech4it.com">Infotech4it</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-body">
            <h3>Search</h3>
            <div class="search-form">
               <input type="text" class="search_lightbox_input" placeholder="Search...">
               <input type="text" class="search_lghtbox_btn">
            </div>
         </div>
      </div>
   </div>
</div>-->
<!--=========Footer end============-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.touchSwipe.min.js')}}"></script>
<script src="{{asset('assets/js/responsive_bootstrap_carousel.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/theme.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script>
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>
<script>
    let modalId = $('#image-gallery');

    $(document)
        .ready(function () {

            loadGallery(true, 'a.thumbnail');

            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current) {
                $('#show-previous-image, #show-next-image')
                    .show();
                if (counter_max === counter_current) {
                    $('#show-next-image')
                        .hide();
                } else if (counter_current === 1) {
                    $('#show-previous-image')
                        .hide();
                }
            }

            /**
             *
             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
             * @param setClickAttr  Sets the attribute for the click handler.
             */

            function loadGallery(setIDs, setClickAttr) {
                let current_image,
                    selector,
                    counter = 0;

                $('#show-next-image, #show-previous-image')
                    .click(function () {
                        if ($(this)
                            .attr('id') === 'show-previous-image') {
                            current_image--;
                        } else {
                            current_image++;
                        }

                        selector = $('[data-image-id="' + current_image + '"]');
                        updateGallery(selector);
                    });

                function updateGallery(selector) {
                    let $sel = selector;
                    current_image = $sel.data('image-id');
                    $('#image-gallery-title')
                        .text($sel.data('title'));
                    $('#image-gallery-image')
                        .attr('src', $sel.data('image'));
                    disableButtons(counter, $sel.data('image-id'));
                }

                if (setIDs == true) {
                    $('[data-image-id]')
                        .each(function () {
                            counter++;
                            $(this)
                                .attr('data-image-id', counter);
                        });
                }
                $(setClickAttr)
                    .on('click', function () {
                        updateGallery($(this));
                    });
            }
        });

    // build key actions
    $(document)
        .keydown(function (e) {
            switch (e.which) {
                case 37: // left
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                        $('#show-previous-image')
                            .click();
                    }
                    break;

                case 39: // right
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                        $('#show-next-image')
                            .click();
                    }
                    break;

                default:
                    return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        });

</script>
</body>

</html>