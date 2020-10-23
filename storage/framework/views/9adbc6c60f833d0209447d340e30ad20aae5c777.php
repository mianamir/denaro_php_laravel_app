<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1><?php echo e(strtolower($student->name)); ?> registered courses</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                    <table class="table table-responsive" id="myTable" data-order='[[ 0, "desc" ]]'>
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>#Code</th>
                            <th>Study Group</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($student_courses as $student_course): ?>
                            <?php
                            $course = \App\Models\Admin\Subject::find($student_course->subject_id);
                            ?>
                            <?php if($course): ?>
                            <tr>
                                <td><?php echo $course->title; ?></td>
                                <td>C-<?php echo $course->code; ?></td>
                                <td><?php echo isset($course->course_to_teach->title) ? $course->course_to_teach->title : "Not Available"; ?></td>
                                <td><?php echo $course->price; ?></td>
                                <td>
                                    <?php /*<?php echo Form::open(['route' => ['admin.subjects.destroy', $subject->id], 'method' => 'delete']); ?>*/ ?>
                                    <div class='btn-group'>
                                        <a href="<?php echo route('admin.subjects.show', [$course->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-folder-open"></i></a>
                                        <?php /*<?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>*/ ?>
                                    </div>
                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <hr>
                <a href="<?php echo e(route('admin.students.index')); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>