

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Video Galleries</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('admin.authors.create'); ?>">Add New</a>
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
                    <?php /*<th>Parent</th>*/ ?>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Video</th>
                    <th>Actions</th>
                    </thead>
                    <tbody>
                    <?php foreach($authors as $author): ?>
                        <tr>


                            <td><?php echo e($author->name); ?></td>
                            <td>
                                <?php if($author->show_in_navigation == 1): ?>
                                    <span class="label label-success">Active</span>
                                <?php else: ?>
                                    <span class="label label-danger">Not Active</span>
                                <?php endif; ?>

                            </td>
                            <td><?php echo $author->details; ?></td>


                            <td>
                                <?php echo Form::open(['route' => ['admin.authors.destroy', $author->id], 'method' => 'delete']); ?>

                                <div class='btn-group'>
                                    <?php /*<a href="<?php echo route('admin.categories.show', [$supplier->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                                    <a href="<?php echo route('admin.authors.edit', [$author->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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