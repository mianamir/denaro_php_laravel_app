

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Headers</h1>
        <?php /*<h1 class="pull-right">*/ ?>
           <?php /*<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('admin.headers.create'); ?>">Add New</a>*/ ?>
        <?php /*</h1>*/ ?>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="myTable">
                    <thead>
                    <th>Logo</th>
                    <?php /*<th>Title</th>*/ ?>
                    <?php /*<th>Image 1</th>*/ ?>
                    <?php /*<th>Image 2</th>*/ ?>
                    <?php /*<th>Phone</th>*/ ?>
                    <?php /*<th>Email</th>*/ ?>
                    <th colspan="3">Actions</th>
                    </thead>
                    <tbody>
                    <?php foreach($headers as $header): ?>
                        <tr>

                            <td><image src="<?php echo e(asset($header->logo)); ?>" width="100" height="100"/></td>
                            <?php /*<td><?php echo e($header->url); ?></td>*/ ?>
                            <?php /*<td><image src="<?php echo e(asset($header->image1)); ?>" width="100" height="100"/></td>*/ ?>
                            <?php /*<td><image src="<?php echo e(asset($header->image2)); ?>" width="100" height="100"/></td>*/ ?>
                            <?php /*<td><?php echo e($header->phone); ?></td>*/ ?>
                            <?php /*<td><?php echo e($header->email); ?></td>*/ ?>
                            <td>
                                <?php /*<?php echo Form::open(['route' => ['admin.headers.destroy', $header->id], 'method' => 'delete']); ?>*/ ?>
                                <div class='btn-group'>
                                    <?php /*<a href="<?php echo route('admin.headers.show', [$header->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                                    <a href="<?php echo route('admin.headers.edit', [$header->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    <?php /*<?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>*/ ?>
                                </div>
                                <?php /*<?php echo Form::close(); ?>*/ ?>
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