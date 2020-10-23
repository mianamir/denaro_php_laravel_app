<!-- Chapter Field -->
<?php
$chapters = \App\Models\Admin\Chapter::get();
?>

<div class="form-group col-sm-6 col-md-6">
    <?php echo Form::label('chapter_id', 'Chapter:'); ?>

    <select class="form-control" name="chapter_id" col-sm-6>

        <option value="-1">Select Chapter</option>
        <?php foreach( $chapters as $c): ?>

            <option value="<?php echo e($c->id); ?>">
                <?php echo e($c->title); ?>

            </option>
        <?php endforeach; ?>

    </select>
</div>


<!-- Detail Field -->
<div class="form-group col-sm-12 col-md-6">
    <?php echo Form::label('video_url', 'Upload videos:'); ?>

    <input type="file" class="form-control"
           id="video_url" name="video_urls[]"
           multiple accept="video/*"/>
</div>



<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>

<!-- Details Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('details', 'Details:'); ?>

    <?php echo Form::text('details', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('status', 'Status:'); ?>

    <select name="status" class = "form-control">
        <?php /*<option value="-1">Select Status</option>*/ ?>
        <option value="active">Active</option>
        <option value="inactive">In Active</option>

    </select>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.topics.index'); ?>" class="btn btn-default">Cancel</a>
</div>
