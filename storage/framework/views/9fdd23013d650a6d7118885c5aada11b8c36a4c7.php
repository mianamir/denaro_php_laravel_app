<table class="table table-responsive" id="chapters-table">
    <thead>
        <th>Subject</th>
        <th>Title</th>
        <th>Details</th>
        <?php /*<th>Created At</th>*/ ?>
        <?php /*<th>Updated At</th>*/ ?>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($chapters as $chapter): ?>
        <tr>
            <td><?php echo $chapter->subject->title; ?></td>
            <td><?php echo $chapter->title; ?></td>
            <td><?php echo $chapter->details; ?></td>
            <?php /*<td><?php echo $chapter->created_at; ?></td>*/ ?>
            <?php /*<td><?php echo $chapter->updated_at; ?></td>*/ ?>
            <td>
                <?php echo Form::open(['route' => ['admin.chapters.destroy', $chapter->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <?php /*<a href="<?php echo route('admin.chapters.show', [$chapter->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                    <a href="<?php echo route('admin.chapters.edit', [$chapter->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>