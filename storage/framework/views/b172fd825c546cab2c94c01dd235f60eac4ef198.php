<!-- Class Id Field -->
<div class="form-group col-sm-6">
    <?php
    $studentclasses = \App\Models\Admin\StudentClass::all();
    ?>
    <?php echo Form::label('class', 'Student Class:'); ?>

    <select name="class_id" class = "form-control" required>
        <?php foreach($studentclasses as $student_class): ?>
            <option value="<?php echo e($student_class->id); ?>" <?php if(isset($student)): ?> <?php if($student->class_id == $student_class->id): ?> selected <?php endif; ?> <?php endif; ?>>
                <?php echo e($student_class->title); ?>

            </option>
        <?php endforeach; ?>
    </select>
</div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Father Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('father_name', 'Father Name:'); ?>

    <?php echo Form::text('father_name', null, ['class' => 'form-control']); ?>

</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php /*<?php echo Form::text('email', null, ['class' => 'form-control']); ?>*/ ?>
    <input type="email" name="email" class="form-control" value="<?php echo e(isset($student) ? old('email', $student->email):""); ?>" <?php echo e(isset($student) ? 'readonly':""); ?>>

</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('phone', 'Phone, Please type correctly because this is the user name of student:'); ?>

    <?php /*<?php echo Form::text('phone', null, ['class' => 'form-control']); ?>*/ ?>
    <input type="text" name="phone" placeholder="000-00000000" class="form-control" value="<?php echo e(isset($student) ? old('phone', $student->phone):""); ?>" <?php echo e(isset($student) ? 'readonly':""); ?>>
</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('password', 'Password:'); ?>

    <?php /*<?php echo Form::password('password', null, ['class' => 'form-control']); ?>*/ ?>
    <input type="password" name="password" class="form-control" value="<?php echo e(isset($student) ? old('password2', $student->password2):""); ?>" >
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('gender', 'Gender:'); ?>

    <select name="gender" class = "form-control">
        <option value="male" <?php if(isset($student)): ?> <?php if($student->gender == "male"): ?> selected <?php endif; ?> <?php endif; ?>>Male</option>
        <option value="female" <?php if(isset($student)): ?> <?php if($student->gender == "female"): ?> selected <?php endif; ?> <?php endif; ?>>Female</option>


    </select>
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('city', 'City:'); ?>

    <?php echo Form::text('city', null, ['class' => 'form-control']); ?>

</div>
<!-- Country Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('country', 'Country:'); ?>

    <?php echo Form::text('country', null, ['class' => 'form-control']); ?>

</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('type', 'Type:'); ?>

    <select name="type" class = "form-control">
        <option value="direct">Direct</option>
        <option value="teacher">Teacher</option>

    </select>
</div>
<?php if(isset($student)): ?>
<div class="form-group col-sm-6">
    <?php echo Form::label('status', 'Status:'); ?>

    <select class="form-control" name="status" required>

        <option value="active"
                <?php echo e(isset($student) && $student->status == "active" ?"selected":''); ?>>Active</option>
        <option value="inactive"
                <?php echo e(isset($student) && $student->status == "inactive" ?"selected":''); ?>>InActive</option>

    </select>
</div>
<?php endif; ?>

<!-- Profile Pic Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('profile_pic', 'Profile Pic:'); ?>

    <?php if(isset($student)): ?>
    <p><img src="<?php echo e(asset('students/' . $student->profile_pic)); ?>" width="100" height="100"/></p>
    <?php endif; ?>
    <?php echo Form::file('profile_pic'); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.students.index'); ?>" class="btn btn-default">Cancel</a>
</div>
