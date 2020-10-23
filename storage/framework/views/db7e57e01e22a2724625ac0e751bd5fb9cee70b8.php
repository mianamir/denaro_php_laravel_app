
<!-- Class Id Field -->
<div class="form-group">
    <?php echo Form::label('class_id', 'Class:'); ?>

    <p><?php echo isset($student->student_class) ? $student->student_class->title : "Not Available"; ?></p>
</div>

<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo $student->name; ?></p>
</div>


<!-- Father Name Field -->
<div class="form-group">
    <?php echo Form::label('father_name', 'Father Name:'); ?>

    <p><?php echo $student->father_name; ?></p>
</div>

<!-- Phone Field -->
<div class="form-group">
    <?php echo Form::label('phone', 'Phone:'); ?>

    <p><?php echo $student->phone; ?></p>
</div>

<div class="form-group">
    <?php echo Form::label('password', 'Password:'); ?>

    <p><?php echo $student->password2; ?></p>
</div>

<div class="form-group">
    <?php echo Form::label('email', 'Email:'); ?>

    <p><?php echo $student->email; ?></p>
</div>
<!-- Gender Field -->
<div class="form-group">
    <?php echo Form::label('gender', 'Gender:'); ?>

    <p><?php echo $student->gender; ?></p>
</div>

<!-- Country Field -->
<div class="form-group">
    <?php echo Form::label('city', 'City:'); ?>

    <p><?php echo $student->city; ?></p>
</div>
<!-- Country Field -->
<div class="form-group">
    <?php echo Form::label('country', 'Country:'); ?>

    <p><?php echo $student->country; ?></p>
</div>

<!-- Type Field -->
<div class="form-group">
    <?php echo Form::label('type', 'Type:'); ?>

    <p><?php echo $student->type; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Reg. Date:'); ?>

    <p><?php echo $student->created_at; ?></p>
</div>

<div class="form-group">
    <?php echo Form::label('status', 'Status:'); ?>

    <p><?php echo $student->status; ?></p>
</div>



