

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

       <div class="gray"><section class="pad20-45-top-bottom get_in_02">
               <?php
               $image_gallery_categories = \App\Models\Admin\BrandType::get();
               ?>
               <div class="row">
                   <div class="container">
                       <?php foreach($image_gallery_categories as $c): ?>
                           <div class="col-md-3">
                               <a href="<?php echo e(route('frontend.image.gallery1', $c->id)); ?>"><h4><?php echo e($c->name); ?></h4></a>
                           </div>
                       <?php endforeach; ?>

                   </div>

               </div>
           </section>
       </div>

       <div class="clearfix">&nbsp;</div>

   </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.denaro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>