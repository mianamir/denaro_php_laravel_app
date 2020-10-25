
<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
           Video Gallery
        </h1>
    </section>
    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">


                    <form action="<?php echo e(route('admin.galleries.update', [$gallery->id])); ?>" method="post" enctype="multipart/form-data">
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
                        <?php if(Session::has('cate_id')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('cat_id')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('name')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('name')); ?>

                            </div>
                        <?php endif; ?>
<?php /*                        <div class="col-md-6">*/ ?>
<?php /*                            <div class="form-group">*/ ?>
<?php /*                                <?php*/ ?>
<?php /*                                $categories = \App\Models\Admin\HomeGallery::get();*/ ?>
<?php /*                                ?>*/ ?>
<?php /*                                <label>Category</label><br>*/ ?>
<?php /*                                <select class="form-control" name="cat_id">*/ ?>
<?php /*                                    <option value="-1">Category</option>*/ ?>
<?php /*                                    <?php foreach($categories as $category): ?>*/ ?>
<?php /*                                        <option value="<?php echo e($category->id); ?>"*/ ?>
<?php /*                                                <?php if($category->id == $gallery->cat_id): ?> selected="selected" <?php endif; ?>><?php echo e($category->title); ?></option>*/ ?>
<?php /*                                    <?php endforeach; ?>*/ ?>

<?php /*                                </select>*/ ?>
<?php /*                            </div>*/ ?>
<?php /*                        </div>*/ ?>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input id="" name="name" value="<?php echo e(old('name', $gallery->name)); ?>" type="text" class="form-control">
                            </div>
                        </div>



<?php /*                        <div class="col-md-6">*/ ?>
<?php /*                            <div class="form-group">*/ ?>
<?php /*                                <label>Image</label>*/ ?>

<?php /*                                <input id="" name="image" type="file" class="form-control">*/ ?>
<?php /*                            </div>*/ ?>
<?php /*                        </div>*/ ?>
<?php /*                        <div class="col-md-6">*/ ?>
<?php /*                            <div class="form-group">*/ ?>
<?php /*                                <label>Image Order</label>*/ ?>

<?php /*                                <input id="" name="order_image" value="<?php echo e(old('order_image', $gallery->order_image)); ?>" type="text" class="form-control">*/ ?>
<?php /*                            </div>*/ ?>
<?php /*                        </div>*/ ?>


                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="" value="Save" class="btn btn-primary">
                                <a href="<?php echo e(route('admin.galleries.index')); ?>" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>