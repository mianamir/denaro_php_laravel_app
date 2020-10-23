<table class="table table-responsive" id="topics-table">
    <thead>
        <th>Chapter</th>
        <th>Title</th>
        <th>Status</th>
        <?php /*<th>Details</th>*/ ?>
        <?php /*<th>Created At</th>*/ ?>
        <?php /*<th>Updated At</th>*/ ?>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($topics as $topic): ?>
        <tr>
            <td><?php echo $topic->chapter->title; ?></td>
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
            <?php /*<td><?php echo $topic->details; ?></td>*/ ?>

            <?php /*<td><?php echo $topic->created_at; ?></td>*/ ?>
            <?php /*<td><?php echo $topic->updated_at; ?></td>*/ ?>
            <td>
                <?php echo Form::open(['route' => ['admin.topics.destroy', $topic->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('admin.topics.show', [$topic->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('admin.topics.edit', [$topic->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>