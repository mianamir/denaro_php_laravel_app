

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Teachers</h1>
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
                <table class="table table-responsive table-hover" id="myTable" data-order='[[ 0, "desc" ]]'>
                    <thead>
                    <tr>
                    <th>Image</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Expertise</th>
                    <?php /*<th>Courses</th>*/ ?>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($teachers as $teacher): ?>
                        <tr>
                            <td><img src="<?php echo asset('teachers/'.$teacher->profile_pic); ?>" width="100" height="100"></td>
                            <td><?php echo $teacher->teacher_code; ?></td>
                            <td><?php echo $teacher->name; ?></td>
                            <td><?php echo isset($teacher->course_to_teach->title) ? $teacher->course_to_teach->title : "Not Available"; ?></td>
                            <?php /*<td><a href="<?php echo e(route('admin.teachers.courses', ['id' => $teacher->id])); ?>"> <?php echo $teacher->courses->count() != null ? $teacher->courses->count() : "Not Available"; ?> </a></td>*/ ?>
                            <td><?php echo $teacher->email; ?></td>
                            <td>
                                <?php if($teacher->status == "active"): ?>
                                    <span class="label label-primary">Active</span>
                                <?php elseif($teacher->status == "inactive"): ?>
                                    <span class="label label-warning">In Active</span>
                                <?php else: ?>
                                    <span class="label label-danger">Not Available</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo $teacher->created_at; ?></td>
                            <td>
                                <?php echo Form::open(['route' => ['admin.teachers.destroy', $teacher->id], 'method' => 'delete']); ?>

                                <div class='btn-group'>
                                    <a href="<?php echo route('admin.teachers.show', [$teacher->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="<?php echo route('admin.teachers.edit', [$teacher->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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