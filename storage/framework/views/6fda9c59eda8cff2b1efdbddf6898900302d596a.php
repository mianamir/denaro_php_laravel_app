<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left"><?php echo e($teacher->name); ?> courses (<?php echo e($teacher->courses->count()); ?>)</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('admin.teachers.create'); ?>">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <?php /*<?php echo $__env->make('admin.teachers.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>*/ ?>
                <table class="table table-responsive" id="subjects-table">
                    <thead>
                    <th>Image</th>
                    <th>Video Featured Image</th>
                    <th>Title</th>
                    <th>#Code</th>
                    <th>Price</th>
                    <th>Is Featured</th>
                    <th>Status</th>
                    <?php /*<th>Created Date</th>*/ ?>
                    <?php /*<th>Last Updated</th>*/ ?>
                    <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                    <?php foreach($subjects as $subject): ?>
                        <tr>
                            <td>
                                <?php if($subject->image != null): ?>
                                    <image src="<?php echo e(asset('subjects/'. $subject->image)); ?>" width="100" height="100"/>
                                <?php else: ?>
                                    <p class="label label-primary">Image Not Available</p>
                                <?php endif; ?>

                            </td>
                            <td>
                                <?php if($subject->promo_video_featured_image != null): ?>
                                    <image src="<?php echo e(asset('subjects/'.$subject->promo_video_featured_image)); ?>" width="100" height="100"/>
                                <?php else: ?>
                                    <p class="label label-primary">Image Not Available</p>
                                <?php endif; ?>

                            </td>

                            <td><?php echo $subject->title; ?></td>
                            <td>C-<?php echo $subject->code; ?></td>


                            <td><?php echo $subject->price; ?></td>
                            <td>
                                <?php if($subject->is_featured == 1): ?>
                                    <span class="label label-info">Yes</span>
                                <?php else: ?>
                                    <span class="label label-warning">No</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($subject->status == "active"): ?>
                                    <span class="label label-primary">Active</span>
                                <?php elseif($subject->status == "inactive"): ?>
                                    <span class="label label-warning">In Active</span>
                                <?php else: ?>
                                    <span class="label label-danger">Not Available</span>
                                <?php endif; ?>
                            </td>
                            <?php /*<td><?php echo $subject->created_at; ?></td>*/ ?>
                            <?php /*<td><?php echo $subject->updated_at; ?></td>*/ ?>


                            <td>
                                <?php /*<?php echo Form::open(['route' => ['admin.subjects.destroy', $subject->id], 'method' => 'delete']); ?>*/ ?>
                                <div class='btn-group'>
                                    <a href="<?php echo route('admin.subjects.show', [$subject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="<?php echo route('admin.subjects.edit', [$subject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    <?php /*<?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>*/ ?>
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