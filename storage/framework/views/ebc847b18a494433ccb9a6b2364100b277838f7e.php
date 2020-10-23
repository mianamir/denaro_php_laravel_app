<table class="table table-responsive" id="carFeatures-table">
    <thead>
        <th>Name</th>
        <?php /*<th>Created At</th>*/ ?>
        <?php /*<th>Updated At</th>*/ ?>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($carFeatures as $carFeature): ?>
        <tr>
            <td><?php echo $carFeature->name; ?></td>
            <?php /*<td><?php echo $carFeature->created_at; ?></td>*/ ?>
            <?php /*<td><?php echo $carFeature->updated_at; ?></td>*/ ?>
            <td>
                <?php echo Form::open(['route' => ['admin.carFeatures.destroy', $carFeature->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <?php /*<a href="<?php echo route('admin.carFeatures.show', [$carFeature->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                    <a href="<?php echo route('admin.carFeatures.edit', [$carFeature->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>