<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1><?php echo $teacher->name; ?> <?php echo $teacher->fathername; ?> (Code: <?php echo $teacher->teacher_code; ?>)</h1>
            <!-- Profile Pic Field -->
            <div class="form-group">

                <p><img src="<?php echo e(asset('teachers/'.$teacher->profile_pic )); ?>" width="200" height="200" ></p>
            </div>

            <p><label>Contacts:</label> <?php echo $teacher->contact1; ?> | <?php echo $teacher->contact2; ?></p>
            <p><label>Email:</label>  <?php echo $teacher->email; ?></p>
            <p><label>Qualification:</label>  <?php echo $teacher->qualificatioon; ?></p>
            <p><label>Course to Teach:</label>  <?php echo $teacher->course_to_teach->title; ?></p>
            <p><label>Experience:</label>  <?php echo $teacher->experience; ?></p>
            <p><label>Username:</label>  <?php echo $teacher->username; ?></p>
            <p><label>Password:</label>  <?php echo $teacher->password2; ?></p>
            <p><label>Country:</label>  <?php echo $teacher->country; ?></p>
            <p><label>City:</label>  <?php echo $teacher->city; ?></p>
            <p><label>CNIC:</label>  <?php echo $teacher->cnic; ?></p>
            <p><label>Status:</label>  <?php echo $teacher->status; ?></p>
            <?php if($teacher->payment_plan_id != null): ?>
            <p><label>Payment Plan:</label> Rs. <?php echo $teacher->payment_plan->price; ?>/<?php echo $teacher->payment_plan->duration; ?></p>
            <?php else: ?>
            <p><label>Payment Plan:</label>  Not Available</p>
            <?php endif; ?>
            <p><label>Joining Date:</label>  <?php echo $teacher->created_at; ?></p>


        </div>
    </div>

</div>