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
                <h3><?php echo e($chapter->title); ?> / topics</h3>

            </div>
            <div class="create-coures">
                <a href="<?php echo e(route('get.frontend.topic.new', ['id' => $chapter->id])); ?>" class="mc-btn btn-style-1">New topic +</a>
            </div>
            <div class="row">

            <?php if(Session::has('topic_saved_flash_message')): ?>
                <div class="alert alert-info">
                    <?php echo e(Session::get('topic_saved_flash_message')); ?>

                </div>
            <?php endif; ?>

            <?php if(Session::has('topic_deleted_flash_message')): ?>
                <div class="alert alert-info">
                    <?php echo e(Session::get('topic_deleted_flash_message')); ?>

                </div>
            <?php endif; ?>

            <?php if(Session::has('topic_not_deleted_flash_message')): ?>
                <div class="alert alert-danger">
                    <?php echo e(Session::get('topic_not_deleted_flash_message')); ?>

                </div>
            <?php endif; ?>

                <div class="col-md-12">

                    <table class="table table-responsive table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Last Modified</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($topics as $topic): ?>
                        <tr>
                            <td><?php echo $topic->title; ?></td>
                            <td>
                                <?php if($topic->status == "active"): ?>
                                    <span class="label label-primary">Active</span>
                                <?php elseif($topic->status == "inactive"): ?>
                                    <span class="label label-warning">In Active</span>
                                <?php else: ?>
                                    <span class="label label-danger">Not Available</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo $topic->created_at; ?></td>
                            <td><?php echo $topic->updated_at; ?></td>
                            <td>
                                <?php echo Form::open(['route' => ['frontend.topic.destroy', $topic->id], 'method' => 'delete']); ?>

                                <div class='btn-group'>
                                    <a href="<?php echo route('get.frontend.topic.show', [$topic->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo route('get.frontend.topic.edit', [$topic->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                                    <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                                </div>
                                <?php echo Form::close(); ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                    <a href="<?php echo e(route('get.frontend.chapters', ['id' => $chapter->subject->id])); ?>" class="mc-btn btn-style-1">Back</a>

                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>