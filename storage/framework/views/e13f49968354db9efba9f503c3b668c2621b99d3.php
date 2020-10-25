

<?php $__env->startSection('content'); ?>
    <img src="<?php echo e($content->image); ?>"/>
   <div class="container">
       <br/><br/>
       <div class="row" >
           <div class="col-md-12">
               <h2 style="text-align: center"><?php echo e($content->title); ?></h2>
                <p><?php echo $content->details; ?></p>
           </div>
       </div>

       <br/><br/>

       <div class="gray">
           <section class="pad20-45-top-bottom get_in_02">

               <div class="row">
                   <div class="container">
                       <?php foreach($image_galleries as $cat): ?>
                       <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                           <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                              data-image="<?php echo e($cat->image); ?>"
                              data-target="#image-gallery">
                               <img class="img-thumbnail"
                                    src="<?php echo e($cat->image); ?>"
                                    alt="">
                           </a>
                       </div>
                       <?php endforeach; ?>

                   </div>


                   <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                       <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h4 class="modal-title" id="image-gallery-title"></h4>
                                   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                   </button>
                               </div>
                               <div class="modal-body">
                                   <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                   </button>

                                   <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                   </button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
       </div>

       <div class="clearfix">&nbsp;</div>

   </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.denaro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>