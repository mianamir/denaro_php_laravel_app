

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Customer
        </h1>
    </section>
    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <?php if(Session::has('flash_message')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('flash_message')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('registered')): ?>
                        <div class="alert alert-success">
                            <?php echo e(Session::get('registered')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('country')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('country')); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(Session::has('password1')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('password1')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('password2')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('password2')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('confirm')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('confirm')); ?>

                        </div>
                    <?php endif; ?>

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
                    <form action="<?php echo e(route('admin.customers.update',['id'=>$customer->id])); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">



                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input id="" name="name"
                                       value="<?php echo e(old('name', $customer)->name); ?>" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input id="" name="email"
                                       value="<?php echo e(old('email', $customer)->email); ?>" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input id="" name="image"
                                       type="file" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Status</label><br>
                                <select class="form-control" name="status">

                                    <option value="-1">Select Status</option>
                                    <option value="Active"
                                            <?php echo e(isset($customer) && $customer->status == "Active" ?"selected":''); ?>>Active</option>
                                    <option value="NotActive"
                                            <?php echo e(isset($customer) && $customer->status == "NotActive" ?"selected":''); ?>>Not Active</option>
                                    <?php /*<option value="Deleted"*/ ?>
                                    <?php /*<?php echo e(isset($suppier) && $suppier->status == "Deleted" ?"selected":''); ?>>Deleted</option>*/ ?>


                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="" value="Update" class="btn btn-primary">
                                <a href="<?php echo e(route('admin.customers.index')); ?>" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>