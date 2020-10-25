

<?php $__env->startSection('content'); ?>
    <img src="<?php echo e($content->image); ?>"/>
   <div class="container">
       <br/><br/>
       <div class="row">
           <div class="col-md-12">
               <h2 style="text-align: center"><?php echo e($content->title); ?></h2>
                <p><?php echo $content->details; ?></p>
           </div>
       </div>

       <br/><br/>
       <section class="home2 recent-project-section projectsec2">

           <div class="container">
               <div class="row">
                   <div class="col-lg-12 wdt-100">
<?php /*                       <h3 class="white-color">we are dealing</h3>*/ ?>
                       <!--<a class="view-project-link" href="#">View All Projects</a>-->
                   </div>

                   <?php foreach($sectors_we_deals_projects as $cate): ?>
                       <?php /*            <?php if($category->parent_id == 0 and ($category->id != 14 or $category->id != 17)): ?>*/ ?>
                       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img homeprj3-slide">

                           <div class="grid">
                               <div class="image-zoom-on-hover">
                                   <div class="gal-item">
                                       <a class="black-hover" href="#">
                                           <img class="img-full img-responsive" src="<?php echo e($cate->image); ?>" alt="<?php echo e($cate->name); ?>">
                                           <div class="tour-layer delay-1"></div>
                                           <div class="vertical-align">
                                               <div class="border">
                                                   <h5><?php echo e($cate->name); ?></h5>
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

   </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.denaro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>