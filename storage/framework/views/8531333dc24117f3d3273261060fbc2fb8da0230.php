

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
        <div class="row">
            <?php
            $video_galleries = \App\Models\Admin\Gallery::get();
            ?>
            <?php foreach($video_galleries as $video_gallery): ?>
            <div class="col-md-3">
                <iframe width="250" height="250" src="https://www.youtube.com/embed/<?php echo e($video_gallery->name); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
            <?php endforeach; ?>

        </div>

       <br/><br/>

   </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.denaro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>