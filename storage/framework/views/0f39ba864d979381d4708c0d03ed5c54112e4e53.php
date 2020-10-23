<table class="table table-responsive" id="subjectTypes-table">
    <thead>
        <th>Title</th>
        <?php /*<th>Created At</th>*/ ?>
        <?php /*<th>Updated At</th>*/ ?>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($subjectTypes as $subjectType): ?>
        <tr>
            <td><?php echo $subjectType->title; ?></td>
            <?php /*<td><?php echo $subjectType->created_at; ?></td>*/ ?>
            <?php /*<td><?php echo $subjectType->updated_at; ?></td>*/ ?>
            <td>
                <?php echo Form::open(['route' => ['admin.subjectTypes.destroy', $subjectType->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <?php /*<a href="<?php echo route('admin.subjectTypes.show', [$subjectType->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                    <a href="<?php echo route('admin.subjectTypes.edit', [$subjectType->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php /*<?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>*/ ?>
                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>