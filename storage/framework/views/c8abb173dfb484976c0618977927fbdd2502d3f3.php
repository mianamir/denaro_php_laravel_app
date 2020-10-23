<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $topic->id; ?></p>
</div>

<!-- Title Field -->
<div class="form-group">
    <?php echo Form::label('title', 'Title:'); ?>

    <p><?php echo $topic->title; ?></p>
</div>

<!-- Details Field -->
<div class="form-group">
    <?php echo Form::label('details', 'Details:'); ?>

    <p><?php echo $topic->details; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $topic->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $topic->updated_at; ?></p>
</div>

