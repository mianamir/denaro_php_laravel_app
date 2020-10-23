<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Topic
        </h1>

    </section>
    <div class="content">
        <a href="<?php echo route('admin.topics.index'); ?>" class="btn btn-default">Back</a>

        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                    <?php /*<?php echo $__env->make('admin.topics.show_fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>*/ ?>
                    <p>Title: <?php echo e($topic->title); ?></p>
                    <p>Details: <?php echo e($topic->details); ?></p>
                    <hr>
                    <table class="table table-responsive" id="topics-table">
                        <thead>
                        <th>Video</th>
                        <th>Status</th>

                        <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                        <?php foreach($topic->topic_videos as $topic_video): ?>
                            <tr>

                                <td>
                                    <?php if($topic_video->featured_image != null): ?>
                                        <video width="320" height="240" poster="<?php echo e(asset('topic_videos/' . $topic_video->featured_image)); ?>" controls>
                                            <source src="<?php echo e(asset("topic_videos/" . $topic_video->video_url)); ?>" type="video/mp4">
                                            <source src="<?php echo e($topic_video->video_url); ?>" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php else: ?>
                                        <video width="320" height="240" poster="<?php echo e(asset('topic_videos/image_320_240.jpg')); ?>" controls>
                                            <source src="<?php echo e(asset("topic_videos/" . $topic_video->video_url)); ?>" type="video/mp4">
                                            <source src="<?php echo e($topic_video->video_url); ?>" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php endif; ?>

                                    <?php /*<video id='my-video' class='video-js' controls preload='auto' width='320' height='240'*/ ?>
                                           <?php /*poster='' data-setup='{}'>*/ ?>
                                        <?php /*<source src='<?php echo e(asset("topic_videos/" . $topic_video->video_url)); ?>' type='video/mp4'>*/ ?>
                                        <?php /*<source src='<?php echo e(asset("topic_videos/" . $topic_video->video_url)); ?>' type='video/webm'>*/ ?>
                                        <?php /*<source src='<?php echo e(asset("topic_videos/" . $topic_video->video_url)); ?>' type='video/ogg'>*/ ?>
                                        <?php /*<p class='vjs-no-js'>*/ ?>
                                            <?php /*To view this video please enable JavaScript, and consider upgrading to a web browser that*/ ?>
                                            <?php /*<a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>*/ ?>
                                        <?php /*</p>*/ ?>
                                    <?php /*</video>*/ ?>


                                </td>
                                <td>
                                    <?php if($topic_video->status == "active"): ?>
                                        <span class="label label-primary">Active</span>
                                    <?php elseif($topic_video->status == "inactive"): ?>
                                        <span class="label label-warning">In Active</span>
                                    <?php else: ?>
                                        <span class="label label-danger">Not Available</span>
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <?php echo Form::open(['route' => ['admin.topic_videos.destroy', $topic_video->id], 'method' => 'delete']); ?>

                                    <div class='btn-group'>
                                        <?php /*<a href="<?php echo route('admin.topics.show', [$topic->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                                        <a href="<?php echo route('admin.topic_videos.edit', [$topic_video->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                                    </div>
                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <hr>

                    <a href="<?php echo route('admin.topics.index'); ?>" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>