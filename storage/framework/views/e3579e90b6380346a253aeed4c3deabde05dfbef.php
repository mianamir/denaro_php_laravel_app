<?php $__env->startSection('content'); ?>
    <?php /*<div class="row">*/ ?>
        <?php /*<form class="form-inline" action="<?php echo e(route('admin.employees.search')); ?>" method="post" enctype="multipart/form-data">*/ ?>
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
        <h1 class="pull-left">Students</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('admin.employees.create'); ?>">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="demo">
                    <thead>
                   <tr>
                       <th>Reg. No#</th>
                       <th>Full Name</th>
                       <th>Office Phone</th>
                       <th>Home Phone</th>
                       <th>Status</th>
                       <th>Registration Date</th>
                       <th>Actions</th>
                   </tr>
                    </thead>
                    <tbody>
                    <?php foreach($employees as $employee): ?>
                        <tr>
                            <td><?php echo e($employee->reg_no); ?></td>
                            <td><?php echo e($employee->full_name); ?></td>
                            <td><?php echo e($employee->office_phone_no); ?></td>
                            <td><?php echo e($employee->present_home_phone_no); ?></td>
                            <td>
                                <?php if($employee->status == "Active"): ?>
                                    <span class="label label-success">Active</span>
                                <?php elseif($employee->status == "NotActive"): ?>
                                    <span class="label label-warning">NotActive</span>
                                <?php else: ?>
                                    <span class="label label-danger">Deleted</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($employee->created_at); ?></td>

                            <td>
                                <?php echo Form::open(['route' => ['admin.employees.destroy', $employee->id], 'method' => 'delete']); ?>

                                <div class='btn-group'>
                                    <a href="<?php echo route('admin.employees.show', [$employee->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="<?php echo route('admin.employees.edit', [$employee->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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