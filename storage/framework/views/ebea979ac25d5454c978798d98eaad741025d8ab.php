

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Header
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">

                   <form action="<?php echo e(route('admin.headers.update', [$header->id])); ?>" method="post" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                       <?php if(count($errors) > 0): ?>
                           <div class="alert alert-danger">
                               <strong>Error!</strong> please provide below form fields.<br><br>
                               <ul>
                                   <?php foreach($errors->all() as $error): ?>
                                       <li><?php echo e($error); ?></li>
                                   <?php endforeach; ?>
                               </ul>
                           </div>
                       <?php endif; ?>
                       <?php /*<?php if(Session::has('phone')): ?>*/ ?>
                           <?php /*<div class="alert alert-danger">*/ ?>
                               <?php /*<?php echo e(Session::get('phone')); ?>*/ ?>
                           <?php /*</div>*/ ?>
                       <?php /*<?php endif; ?>*/ ?>
                       <?php /*<?php if(Session::has('email')): ?>*/ ?>
                           <?php /*<div class="alert alert-danger">*/ ?>
                               <?php /*<?php echo e(Session::get('email')); ?>*/ ?>
                           <?php /*</div>*/ ?>
                       <?php /*<?php endif; ?>*/ ?>

                       <?php /*<div class="col-md-6">*/ ?>
                           <?php /*<div class="form-group">*/ ?>
                               <?php /*<label>Phone</label>*/ ?>
                               <?php /*<input type="text" name="phone" value="<?php echo e(old('phone', $header->phone)); ?>" class="form-control">*/ ?>
                           <?php /*</div>*/ ?>
                       <?php /*</div>*/ ?>
                       <?php /*<div class="col-md-6">*/ ?>
                           <?php /*<div class="form-group">*/ ?>
                               <?php /*<label>Email</label>*/ ?>
                               <?php /*<input type="text" name="email" value="<?php echo e(old('email', $header->email)); ?>" class="form-control">*/ ?>
                           <?php /*</div>*/ ?>
                       <?php /*</div>*/ ?>
                       <?php /*<div class="col-md-6">*/ ?>
                           <?php /*<div class="form-group">*/ ?>
                               <?php /*<label>Title</label>*/ ?>
                               <?php /*<input type="text" name="url" value="<?php echo e(old('url', $header->url)); ?>" class="form-control">*/ ?>
                           <?php /*</div>*/ ?>
                       <?php /*</div>*/ ?>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Logo</label><br>
                               <input type="file" name="logo" class="">
                           </div>
                       </div>
                       <?php /*<div class="col-md-6">*/ ?>
                           <?php /*<div class="form-group">*/ ?>
                               <?php /*<label>Image1</label><br>*/ ?>
                               <?php /*<input type="file" name="image1" class="">*/ ?>
                           <?php /*</div>*/ ?>
                       <?php /*</div>*/ ?>
                           <?php /*<div class="col-md-6">*/ ?>
                               <?php /*<div class="form-group">*/ ?>
                                   <?php /*<label>Image2</label><br>*/ ?>
                                   <?php /*<input type="file" name="image2" class="">*/ ?>
                               <?php /*</div>*/ ?>
                           <?php /*</div>*/ ?>

                       <div class="col-md-12">
                           <div class="form-group">
                               <input type="submit" name="" value="Update" class="btn btn-primary">
                               <a href="<?php echo e(route('admin.headers.index')); ?>" class="btn btn-default">Cancel</a>
                           </div>
                       </div>
                   </form>



               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>