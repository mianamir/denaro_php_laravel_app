<?php $__env->startSection('content'); ?>

    <!-- PROFILE FEATURE -->
    <section class="profile-feature">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="info-author">
                <div class="image">
                    <img src="<?php echo e(asset('teachers/'.$teacher->profile_pic)); ?>" alt="">
                </div>
                <div class="name-author">
                    <h2 class="big"><?php echo e($teacher->name); ?></h2>
                </div>
                <div class="address-author">
                    <i class="fa fa-map-marker"></i>
                    <h3><?php echo e($teacher->city); ?>, <?php echo e($teacher->country); ?></h3>
                </div>
            </div>
            <div class="info-follow">
                <?php /*<div class="trophies">*/ ?>
                    <?php /*<span>12</span>*/ ?>
                    <?php /*<p>Trophies</p>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="trophies">*/ ?>
                    <?php /*<span>12</span>*/ ?>
                    <?php /*<p>Follower</p>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="trophies">*/ ?>
                    <?php /*<span>20</span>*/ ?>
                    <?php /*<p>Following</p>*/ ?>
                <?php /*</div>*/ ?>
                <div class="trophies">
                    <span>$ 149,902</span>
                    <p>Balance</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END / PROFILE FEATURE -->

    <!-- CONTEN BAR -->
    <?php echo $__env->make('frontend.site.includes.teacher-content-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- END / CONTENT BAR -->



    <!-- COURSE CONCERN -->
    <section id="course-concern" class="course-concern">
        <div class="container">

            <div class="price-course">
                <i class="icon md-database"></i>
                <h3><?php echo e($course->title); ?> / chapters</h3>

            </div>
            <div class="create-coures">
                <a href="<?php echo e(route('get.frontend.chapter.new', ['id' => $course->id])); ?>" class="mc-btn btn-style-1">New chapter +</a>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <table class="table table-responsive table-hover" id="myTable">
                        <thead>
                        <tr>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach($chapters as $chapter): ?>
                        <tr>
                            <td><?php echo $chapter->title; ?></td>
                            <td><?php echo str_limit($chapter->details, 100); ?></td>
                            <td>
                                <?php echo Form::open(['route' => ['frontend.chapter.destroy', $chapter->id], 'method' => 'delete']); ?>

                                <div class='btn-group'>
                                    <a href="<?php echo route('get.frontend.topics', [$chapter->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo route('get.frontend.chapter.edit', [$chapter->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                                    <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                                </div>
                                <?php echo Form::close(); ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>


                </tbody>
            </table>

                    <a href="<?php echo e(route('teaching.account.dashboard')); ?>" class="mc-btn btn-style-1">Back</a>

                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>