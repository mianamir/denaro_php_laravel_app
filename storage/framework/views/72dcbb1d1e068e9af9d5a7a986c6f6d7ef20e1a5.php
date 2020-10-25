
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

       <div class="clearfix">&nbsp;</div>

       <div class="container">
           <h3 style="text-align: center; font-weight: normal;">Our Partners/ Our Clients</h3>
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

   </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.denaro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>