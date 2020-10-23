
<?php $__env->startSection('title'); ?>
    <?php echo $content->title; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>
    <?php echo $content->met_keywords; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    <?php echo $content->meta_description; ?>

<?php $__env->stopSection(); ?>
<?php
$contact1 = \App\Models\Admin\Contact::where('id', 9)->first();

?>
<?php $__env->startSection('content'); ?>
    <img src="<?php echo e($content->image); ?>"/>

<div class="container">
    <h1><?php echo e($content->title); ?></h1>

    <div class="row">
    <div class="col-md-6">
        <form class="form" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Message</label>
                <?php /*<input type="text" name="message" class="form-control"/>*/ ?>
                <textarea name="message" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Get Free Consulation" class="btn btn-primary btn-style-3"/>

            </div>
        </form>

    </div>
    <div class="col-md-6">
        <br>
        <address>
            <p style="font-size: 20px; font-weight: bold; color: #000;"><i class="icon md-email"></i>: <?php echo e($contact1->email); ?></p><br>
            <p style="font-size: 20px; font-weight: bold; color: #000;"><i class="fa fa-mobile"></i>: <?php echo e($contact1->phone1); ?></p><br>
            <p style="font-size: 20px; font-weight: bold; color: #000;"><i class="fa fa-map-marker"></i>: <?php echo e($contact1->address); ?></p>

        </address>


        </div>

    </div> <!--row ends-->

</div>

<div class="row">

        <div class="col-md-12">
            <?php echo $contact1->fax; ?>


        </div>

    </div> <!--row ends-->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>