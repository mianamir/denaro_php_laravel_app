<?php if(session()->has("admin_user_id") && session()->has("temp_user_id")): ?>
    <div class="alert alert-warning logged-in-as">
        You are currently logged in as <?php echo e(access()->user()->name); ?>. <a href="<?php echo e(route("auth.logout-as")); ?>">Re-Login as <?php echo e(session()->get("admin_user_name")); ?></a>.
    </div><!--alert alert-warning logged-in-as-->
<?php endif; ?>