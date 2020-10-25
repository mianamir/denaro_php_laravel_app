

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Project Category</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('admin.categories.create'); ?>">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="myTable">
                    <thead>
                    <th>Project Category Parent</th>
                    <th>Project Category</th>
                    <th>Image</th>
                    <th colspan="3">Actions</th>
                    </thead>
                    <tbody>
                    <?php foreach($categories as $category): ?>
                        <tr>
                            <?php
                            $categories_parents = \App\Models\Admin\Category::
                            where('parent_id','=',0)->get();
                            ?>
                            <?php if($category->parent_id != 0): ?>
                            <?php foreach($categories_parents as $parent_category): ?>
                            <?php if($parent_category->id == $category->parent_id): ?>
                            <td><?php echo e($parent_category->name); ?></td>
                            <?php endif; ?>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <td>"Parent"</td>
                            <?php endif; ?>
                            <td><?php echo e($category->name); ?></td>

                            <td><img src="<?php echo e(asset($category->image)); ?>" style="width: 100px; height: 100px"></td>
                            <td>
                                <?php echo Form::open(['route' => ['admin.categories.destroy', $supplier->id], 'method' => 'delete']); ?>

                                <div class='btn-group'>
                                    <?php /*<a href="<?php echo route('admin.categories.show', [$supplier->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                                    <a href="<?php echo route('admin.categories.edit', [$category->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>

                                    <?php if($category->parent_id == 0 and ($category->id != 14 or $category->id != 17)): ?>
                                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>


                                    <?php endif; ?>

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