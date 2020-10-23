<?php $__env->startSection('content'); ?>
    <?php /*<div class="row">*/ ?>
        <?php /*<form class="form-inline" action="<?php echo e(route('admin.customers.search')); ?>" method="post" enctype="multipart/form-data">*/ ?>
            <?php /*<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">*/ ?>
            <?php /*<div class="form-group mx-sm-6 mb-2" style="width: 40% !important; margin-left: 60px;">*/ ?>
                <?php /*<input type="date" class="form-control" id="from" name="from" placeholder="From Date" style="width: 95% !important;">*/ ?>
            <?php /*</div>*/ ?>
            <?php /*<div class="form-group mx-sm-6 mb-2" style="width: 40% !important;">*/ ?>
                <?php /*<input type="date" class="form-control" id="to" name="to" placeholder="To Date" style="width: 95% !important;">*/ ?>
            <?php /*</div>*/ ?>

            <?php /*<button type="submit" class="btn btn-primary">Search</button>*/ ?>
        <?php /*</form>*/ ?>
    <?php /*</div>*/ ?>
    <?php /*<hr  style="border-bottom: solid 1px #3c8dbc;">*/ ?>
    <section class="content-header">
        <h1 class="pull-left">Customers</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('admin.customers.create'); ?>">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="myTable" data-order='[[ 0, "desc" ]]'>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($customers as $customer): ?>
                        <tr>
                            <td><?php echo e($customer->name); ?></td>
                            <td><?php echo e($customer->email); ?></td>
                            <td><img src="<?php echo e(asset($customer->image)); ?>" style="width: 100px; height: 100px;"></td>
                            <td>
                                <?php if($customer->status == "Active"): ?>
                                    <span class="label label-success">Active</span>
                                <?php elseif($customer->status == "NotActive"): ?>
                                    <span class="label label-warning">Not Active</span>
                                <?php else: ?>
                                    <span class="label label-danger">Deleted</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($customer->created_at); ?></td>

                            <td>
                                <?php echo Form::open(['route' => ['admin.customers.destroy', $customer->id], 'method' => 'delete']); ?>

                                <div class='btn-group'>
                                    <?php /*<a href="<?php echo route('admin.customers.show', [$customer->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                                    <a href="<?php echo route('admin.customers.edit', [$customer->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
<?php $__env->startSection('postJquery'); ?>
    @parent

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>