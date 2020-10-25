

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Social Icons</h1>
<!--        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('admin.socialIcons.create'); ?>">Add New</a>
        </h1>-->
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="myTable">
                    <thead>
                    <th>Name</th>
                    <th>URL</th>


                    <th colspan="3">Actions</th>
                    </thead>
                    <tbody>
                    <?php foreach($socialIcons as $socialIcon): ?>
                        <tr>
                            <td><?php echo e($socialIcon->name); ?></td>
                            <td><?php echo e($socialIcon->url); ?></td>

                            <td>
                                <?php /*<?php echo Form::open(['route' => ['admin.socialIcons.destroy', $contact->id], 'method' => 'delete']); ?>*/ ?>
                                <div class='btn-group'>
                                    <?php /*<a href="<?php echo route('admin.contacts.show', [$contact->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                                    <a href="<?php echo route('admin.socialIcons.edit', [$socialIcon->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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