

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Pages</h1>
        <h1 class="pull-right">

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
                    <tr>
                        <th>Title</th>
                        <th>Heading</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($pages as $page): ?>
                        <tr>
                            <td><?php echo e($page->title); ?></td>
                            <td><?php echo e($page->heading); ?></td>
                            <td>
                                <?php /*<?php echo Form::open(['route' => ['admin.pages.destroy', $contact->id], 'method' => 'delete']); ?>*/ ?>
                                <div class='btn-group'>
                                    <a href="<?php echo route('admin.pages.show', [$page->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="<?php echo route('admin.pages.edit', [$page->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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

<?php /*<?php $__env->startSection('after-scripts'); ?>*/ ?>
    <?php /*<?php echo e(Html::script("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.js")); ?>*/ ?>
    <?php /*<?php echo e(Html::script("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/af.js")); ?>*/ ?>

    <?php /*<script>*/ ?>
        <?php /*$(function () {*/ ?>
            <?php /*$("#myTable").DataTable();*/ ?>
        <?php /*});*/ ?>
    <?php /*</script>*/ ?>
<?php /*<?php $__env->stopSection(); ?>*/ ?>
<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>