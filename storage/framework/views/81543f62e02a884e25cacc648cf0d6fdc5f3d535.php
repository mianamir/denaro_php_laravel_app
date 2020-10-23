<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <?php if($topic->topic_video != ""): ?>
                    <iframe width="87%" height="500" poster="" src="<?php echo e($topic->topic_video); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <?php else: ?>
                    <p class="label label-primary">Video Not Available</p>
                <?php endif; ?>

            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <h1><?php echo $topic->title; ?> </h1>
            <p><label>Status:</label>  <?php echo $topic->status; ?></p>
            <p><label>Created Date:</label>  <?php echo $topic->created_at; ?></p>
            <p><label>Updated Date:</label>  <?php echo $topic->updated_at; ?></p>
            <p><label>Details:</label>  <?php echo $topic->details; ?></p>

        </div>

    </div>

</div>


