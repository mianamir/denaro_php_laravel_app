<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Teacher
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">

                   <form action="<?php echo e(route('admin.teachers.update', [$teacher->id])); ?>" method="post" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                       <?php if(count($errors) > 0): ?>
                           <div class="alert alert-danger">
                               <strong>Error!</strong> please provide below form fields.<br><br>
                               <ul>
                                   <?php foreach($errors->all() as $error): ?>
                                       <li><?php echo e($error); ?></li>
                                   <?php endforeach; ?>
                               </ul>
                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('name')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('name')); ?>

                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('fathername')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('fathername')); ?>

                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('contact1')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('contact1')); ?>

                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('contact2')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('contact2')); ?>

                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('email')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('email')); ?>

                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('qualificatioon')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('qualificatioon')); ?>

                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('subject_to_teach')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('subject_to_teach')); ?>

                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('experience')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('experience')); ?>

                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('username')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('username')); ?>

                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('password')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('password')); ?>

                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('country')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('country')); ?>

                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('city')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('city')); ?>

                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('cnic')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('cnic')); ?>

                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('status')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('status')); ?>

                           </div>
                       <?php endif; ?>
                       <?php if(Session::has('payment_plan_id')): ?>
                           <div class="alert alert-danger">
                               <?php echo e(Session::get('payment_plan_id')); ?>

                           </div>
                       <?php endif; ?>
                       <?php /*<?php if(Session::has('profile_pic')): ?>*/ ?>
                           <?php /*<div class="alert alert-danger">*/ ?>
                               <?php /*<?php echo e(Session::get('profile_pic')); ?>*/ ?>
                           <?php /*</div>*/ ?>
                       <?php /*<?php endif; ?>*/ ?>



                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Name</label>
                               <input type="text" value="<?php echo e(old('name', $teacher->name)); ?>" name="name" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Father Name</label>
                               <input type="text" value="<?php echo e(old('fathername', $teacher->fathername)); ?>" name="fathername" class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Contact1</label>
                               <input type="text" value="<?php echo e(old('contact1', $teacher->contact1)); ?>" name="contact1" class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Contact2</label>
                               <input type="text" value="<?php echo e(old('contact2', $teacher->contact2)); ?>" name="contact2" class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Email</label>
                               <input type="email" value="<?php echo e(old('email', $teacher->email)); ?>" name="email" class="form-control" required>
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Qualification</label>
                               <input type="text" value="<?php echo e(old('qualificatioon', $teacher->qualificatioon)); ?>" name="qualificatioon" class="form-control" required>
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Course To Teach</label><br>
                               <?php
                               $course_to_teaches = \App\Models\Admin\CourseToTeach::all();
                               ?>
                               <select name="course_to_teach_id" class = "form-control">
                                   <?php foreach($course_to_teaches as $course_to_teach): ?>
                                       <option value="<?php echo e($course_to_teach->id); ?>" <?php if(isset($teacher) && $course_to_teach->id == $teacher->course_to_teach_id): ?> selected="selected" <?php endif; ?>><?php echo e($course_to_teach->title); ?></option>
                                   <?php endforeach; ?>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Experience</label>
                               <input type="text" value="<?php echo e(old('experience', $teacher->experience)); ?>" name="experience" class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>User Name</label>
                               <input type="text" value="<?php echo e(old('username', $teacher->username)); ?>" name="username" class="form-control" readonly>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Password</label>
                               <input type="password" value="<?php echo e(old('password2', $teacher->password2)); ?>" name="password" class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Country</label>
                               <input type="text" value="<?php echo e(old('country', $teacher->country)); ?>" name="country" class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>City</label>
                               <input type="text" value="<?php echo e(old('city', $teacher->city)); ?>" name="city" class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>CNIC</label>
                               <input type="text" value="<?php echo e(old('cnic', $teacher->cnic)); ?>" name="cnic" class="form-control" required>
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Status</label><br>
                               <select class="form-control" name="status" required>

                                   <option value="active"
                                           <?php echo e(isset($teacher) && $teacher->status == "active" ?"selected":''); ?>>Active</option>
                                   <option value="inactive"
                                           <?php echo e(isset($teacher) && $teacher->status == "inactive" ?"selected":''); ?>>InActive</option>

                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Payment Plan</label><br>
                               <?php
                               $payment_plans = \App\Models\Admin\PaymentPlan::all()
                               ?>
                               <select class="form-control" name="payment_plan_id" required>
                                   <?php foreach($payment_plans as $payment_plan): ?>
                                   <option value="<?php echo e($payment_plan->id); ?>" <?php if($payment_plan->id == $teacher->payment_plan_id): ?> selected="selected" <?php endif; ?>>
                                       Rs. <?php echo e($payment_plan->price); ?>/<?php echo e($payment_plan->duration); ?>

                                   </option>
                                   <?php endforeach; ?>
                               </select>
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Profile Image</label><br>
                               <p><img src="<?php echo e(asset('teachers/'.$teacher->profile_pic)); ?>" width="100" height="100"></p><br>
                               <p>Or upload new image</p>
                               <input type="file" name="profile_pic" class="">
                           </div>
                       </div>

                       <div class="col-md-12">
                           <div class="form-group">
                               <input type="submit" name="" value="Save" class="btn btn-primary">
                               <a href="<?php echo e(route('admin.teachers.index')); ?>" class="btn btn-default">Cancel</a>
                           </div>
                       </div>
                   </form>


               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>