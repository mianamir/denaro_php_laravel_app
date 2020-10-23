<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Fathername Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fathername', 'Fathername:'); ?>

    <?php echo Form::text('fathername', null, ['class' => 'form-control']); ?>

</div>

<!-- Contact1 Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('contact1', 'Contact1:'); ?>

    <?php echo Form::text('contact1', null, ['class' => 'form-control']); ?>

</div>

<!-- Contact2 Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('contact2', 'Contact2:'); ?>

    <?php echo Form::text('contact2', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Qualificatioon Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('qualificatioon', 'Qualificatioon:'); ?>

    <?php echo Form::text('qualificatioon', null, ['class' => 'form-control']); ?>

</div>

<!-- course_to_teach_id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('course_to_teach_id', 'Course To Teach :'); ?>

    <?php
    $course_to_teaches = \App\Models\Admin\CourseToTeach::all()
    ?>
    <select name="course_to_teach_id" class = "form-control">
        <?php foreach($course_to_teaches as $course_to_teach): ?>
            <option value="<?php echo e($course_to_teach->id); ?>" <?php if(isset($teacher) && $course_to_teach->id == $teacher->course_to_teach_id): ?> selected="selected" <?php endif; ?>><?php echo e($course_to_teach->title); ?></option>
        <?php endforeach; ?>
    </select>
</div>

<!-- Experience Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('experience', 'Experience:'); ?>

    <?php echo Form::text('experience', null, ['class' => 'form-control']); ?>

</div>

<!-- Username Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('username', 'Username:'); ?>

    <p>Type username correctly because it will not changeable</p>
    <?php echo Form::text('username', null, ['class' => 'form-control']); ?>

</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password', 'Password:'); ?>

    <?php echo Form::password('password', ['class' => 'form-control']); ?>

</div>

<!-- Teacher Code Field -->
<?php /*<div class="form-group col-sm-6">*/ ?>
    <?php /*<?php echo Form::label('teacher_code', 'Teacher Code:'); ?>*/ ?>
    <?php /*<?php echo Form::text('teacher_code', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>

<!-- Country Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('country', 'Country:'); ?>

    <?php echo Form::text('country', null, ['class' => 'form-control']); ?>

</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('city', 'City:'); ?>

    <?php echo Form::text('city', null, ['class' => 'form-control']); ?>

</div>

<div class="clearfix"></div>

<!-- Cnic Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cnic', 'Cnic:'); ?>

    <?php echo Form::text('cnic', null, ['class' => 'form-control']); ?>

</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('status', 'Status:'); ?>

    <select name="status" class = "form-control">
        <option value="active">Active</option>
        <option value="inactive">In Active</option>

    </select>
</div>
<!-- Status Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('payment_plan', 'Payment Plan:'); ?>

    <?php
    $payment_plans = \App\Models\Admin\PaymentPlan::all()
    ?>
    <select name="payment_plan_id" class = "form-control">
        <?php foreach($payment_plans as $payment_plan): ?>
        <option value="<?php echo e($payment_plan->id); ?>">Rs. <?php echo e($payment_plan->price); ?>/<?php echo e($payment_plan->duration); ?></option>
        <?php endforeach; ?>
    </select>
</div>
<!-- Profile Pic Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('profile_pic', 'Profile Pic:'); ?>

    <?php if(isset($teacher)): ?>
        <p><img src="<?php echo e(asset('teachers/' . $teacher->profile_pic)); ?>" width="100" height="100"/></p>
    <?php endif; ?>
    <?php echo Form::file('profile_pic'); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.teachers.index'); ?>" class="btn btn-default">Cancel</a>
</div>
