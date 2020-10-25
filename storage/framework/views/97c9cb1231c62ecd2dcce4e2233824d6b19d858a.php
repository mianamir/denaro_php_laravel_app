

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Image Gallery
        </h1>
    </section>
    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">

                    <form action="<?php echo e(route('admin.brands.store')); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <div class="col-md-6">
                           <div class="form-group">
                               <input type="file" name="file" class="form-control"/>
                           </div>
                       </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php
                                $brandTypes = \App\Models\Admin\BrandType::all();
                                ?>
                                <select name="type" class="form-control">
                                    <option>Select Brand Type</option>
                                    <?php foreach($brandTypes as $brand): ?>
                                        <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                        </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <input type="submit" class="btn btn-primary" value="Save">
                                 <a href="<?php echo e(route('admin.brands.index')); ?>" class="btn btn-default">Cancel</a>
                             </div>
                         </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>