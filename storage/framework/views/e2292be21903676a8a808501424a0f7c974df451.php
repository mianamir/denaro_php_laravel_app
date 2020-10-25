<?php $__env->startSection('title'); ?>
    <?php echo $content->title; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>
    <?php echo $content->met_keywords; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    <?php echo $content->meta_description; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                        <?php foreach($banners as $banner): ?>
                        <div class="item <?php echo e(!$active ? 'active' : ''); ?>">
                            <img src="<?php echo e($banner->image); ?>" alt="slidebg1">
                            <div class="carousel-caption">
                                <h3 class=" object-non-visible" data-animation="animated fadeInLeft" style="color:#fff;"><?php echo e($banner->title); ?></h3>
                                <p class=" object-non-visible" data-animation="animated fadeInRight"><?php echo e($banner->button_text); ?></p>

                            </div>
                        </div>
                            <?php $active = true; ?>
                        <?php endforeach; ?>


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
            <h2><?php echo e($home_page->title); ?></h2>
            <p><?php echo $home_page->details; ?></p>
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
            <?php
            $categories = \App\Models\Admin\Category::
            where('parent_id', 0)
            ->where('id', '!=', 14)
            ->where('id', '!=' , 17)
            ->orderBy('created_at', 'DESC')->get();
            ?>
            <?php foreach($categories as $category): ?>
<?php /*            <?php if($category->parent_id == 0 and ($category->id != 14 or $category->id != 17)): ?>*/ ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img homeprj3-slide">

                <div class="grid">
                    <div class="image-zoom-on-hover">
                        <div class="gal-item">
                            <a class="black-hover" href="#">
                                <img class="img-full img-responsive" src="<?php echo e($category->image); ?>" alt="Project1">
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-align">
                                    <div class="border">
                                        <h5><?php echo e($category->name); ?></h5>
                                    </div>
                                    <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View More</span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <h4><?php echo e($category->name); ?></h4>

            </div>
<?php /*            <?php endif; ?>*/ ?>
            <?php endforeach; ?>


        </div>
    </div>
</section>

<!--=========Footer Start============-->
<?php
$home_projects_callouts = \App\Models\Admin\Page::where('name', 'home_projects_callout')->first();

?>
<footer>
    <div class="yellow-background solution-available text-center">
        <div class="container">
            <h5><?php echo e($home_projects_callouts->title); ?></h5>
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
                        <?php
                        $industrial_solutions_projects = \App\Models\Admin\Category::
                        where('parent_id', 14)->get();
                        $i_active = false;
                        ?>
                        <?php foreach($industrial_solutions_projects as $industrial_solution): ?>
                        <div class="item <?php echo e(!$i_active ? 'active' : ''); ?>">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img ">
                                        <div class="grid">
                                            <div class="image-zoom-on-hover">
                                                <div class="gal-item">
                                                    <a class="black-hover" href="#">
                                                        <img class="img-full img-responsive" src="<?php echo e($industrial_solution->image); ?>" alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                        <div class="vertical-align">
                                                            <div class="border">
                                                                <h5><?php echo e($industrial_solution->name); ?> </h5>
                                                            </div>
                                                            <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php $i_active = true; ?>
                        <?php endforeach; ?>



                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--=========Recent Project end============-->


<!--=========Testimonial Start============-->
<?php
//$home_video = \App\Models\Admin\Page::where('name', 'home_video')->first();
$home_video = \App\Models\Admin\Gallery::first();
?>
<section class="pad20-45-top-bottom home3_testimonial carousel slide two_shows_one_move common_testimonial_01" id="var_testimonial" data-ride="carousel">
    <div class="container">

        <div class="col-md-6 col-sm-6 col-xs-12">
<?php /*            <h3 class=" text-center"><?php echo e($home_video->title); ?></h3>*/ ?>
<?php /*            <img class="img-full img-responsive" src="<?php echo e($home_video->name); ?>" alt="">*/ ?>
            <div class="col">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo e($home_video->name); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
            <a class="btn btn-primary" href="<?php echo e(route('frontend.site.video.gallery.search')); ?>">All Videos</a>

        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">


            <h3 class=" text-center">News Updates</h3>
            <div class="clearfix">&nbsp;</div>
            <?php
            $news_updates = \App\Models\Admin\News::orderBy('created_at','DESC')->get();
            ?>
            <marquee scrollamount="4" onmouseover=this.stop() onmouseout=this.start() direction="up">
                <?php foreach($news_updates as $news_update): ?>
                <blockquote class="margin-clear">
                    <p><?php echo $news_update->detail; ?></p>
                    <footer><cite title="Source Title"><?php echo e($news_update->title); ?></cite></footer>
                </blockquote>
                <?php endforeach; ?>

            </marquee>



        </div>
    </div>
</section>

<div class="clearfix">&nbsp;</div>

<div class="container">
    <h3 align="center">Our Partners/ Our Clients</h3>
    <section class="customer-logos slider">
        <?php
        $clients = \App\Models\Admin\Client::orderBy('created_at', 'DESC')->get();
        ?>
        <?php foreach($clients as $client): ?>
        <div class="slide"><img src="<?php echo e($client->image); ?>"></div>
        <?php endforeach; ?>
                <div class="clearfix">&nbsp;</div>
    </section>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.denaro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>