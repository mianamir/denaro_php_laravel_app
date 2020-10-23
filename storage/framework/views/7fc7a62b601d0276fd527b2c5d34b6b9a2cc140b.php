

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Contacts</h1>
        <?php /*<h1 class="pull-right">*/ ?>
           <?php /*<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('admin.contacts.create'); ?>">Add New</a>*/ ?>
        <?php /*</h1>*/ ?>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="demo1">
                    <thead>
                   <tr>
                       <th>Title</th>
                       <th>Email</th>
                       <th>Phone</th>
                       <th>Map</th>
                       <th>Actions</th>
                   </tr>
                    </thead>
                    <tbody>
                    <?php foreach($contacts as $contact): ?>
                        <tr>
                            <td><?php echo e($contact->title); ?></td>
                            <td><?php echo e($contact->email); ?></td>
                            <td><?php echo e($contact->phone1); ?></td>
                            <td style="width: 200px; height: 20px;"><?php echo $contact->fax; ?></td>
                            <td>
                                <?php /*<?php echo Form::open(['route' => ['admin.contacts.destroy', $contact->id], 'method' => 'delete']); ?>*/ ?>
                                <div class='btn-group'>
                                    <?php /*<a href="<?php echo route('admin.contacts.show', [$contact->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                                    <a href="<?php echo route('admin.contacts.edit', [$contact->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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

<?php $__env->startSection('postJquery'); ?>
    @parent

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>