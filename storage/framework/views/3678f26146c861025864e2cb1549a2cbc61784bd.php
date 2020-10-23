<table class="table table-responsive" id="studentClasses-table">
    <thead>
        <th>Title</th>
        <?php /*<th>Created At</th>*/ ?>
        <?php /*<th>Updated At</th>*/ ?>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($studentClasses as $studentClass): ?>
        <tr>
            <td><?php echo $studentClass->title; ?></td>
            <?php /*<td><?php echo $studentClass->created_at; ?></td>*/ ?>
            <?php /*<td><?php echo $studentClass->updated_at; ?></td>*/ ?>
            <td>
                <?php echo Form::open(['route' => ['admin.studentClasses.destroy', $studentClass->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <?php /*<a href="<?php echo route('studentClasses.show', [$studentClass->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                    <a href="<?php echo route('admin.studentClasses.edit', [$studentClass->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php /*<?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>*/ ?>
                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>