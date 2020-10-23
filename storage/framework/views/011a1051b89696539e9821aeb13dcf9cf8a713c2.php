<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>Student</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                    <table class="table table-responsive" id="myTable1" data-order='[[ 0, "desc" ]]'>
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>#Code</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($courses as $course): ?>
                            <form action="<?php echo e(route('admin.student.reg.step2.post')); ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" name="course_id" value="<?php echo $course->id; ?>">
                                <input type="hidden" name="student_id" value="<?php echo $student->id; ?>">
                            <tr>

                                <td><?php echo $course->title; ?></td>
                                <td>C-<?php echo $course->code; ?></td>
                                <td><?php echo $course->price; ?></td>

                                <td>
                                    <div class='btn-group'>
                                        <button type="submit" class="btn btn-primary">Register Course</button>
                                    </div>

                                </td>
                            </tr>
                            </form>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>