

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Image Gallery</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('admin.brands.create'); ?>">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive">
                    <thead>
                    <th>Image Gallery Category</th>
                    <th>Image Gallery</th>

                    <th colspan="3">Actions</th>
                    </thead>
                    <tbody>
                    <?php foreach($brands as $brand): ?>
                        <tr>

                            <?php
                            $types = \App\Models\Admin\BrandType::all();
                            ?>
                            <?php foreach($types as $type): ?>
                            <?php if($type->id == $brand->brand_type_id): ?>
                            <td><?php echo e($type->name); ?></td>
                            <?php endif; ?>
                            <?php endforeach; ?>
                            <td><img src="<?php echo e(asset($brand->image)); ?>" width="100" height="100"/></td>
                            <td>
                                <?php echo Form::open(['route' => ['admin.brands.destroy', $brand->id], 'method' => 'delete']); ?>

                                <div class='btn-group'>
                                    <?php /*<a href="<?php echo route('admin.products.show', [$product->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                                    <a href="<?php echo route('admin.brands.edit', [$brand->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                                </div>
                                <?php echo Form::close(); ?>

                            </td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>