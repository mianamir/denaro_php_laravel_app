<table class="table table-responsive table-hover" id="demo">
    <thead>
        <th>Image</th>
        <th>Code</th>
        <th>Name</th>
        <th>Contacts</th>
        <th>Email</th>
        <th>Status</th>
        <th>Joining Date</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($teachers as $teacher): ?>
        <tr>
            <td><img src="<?php echo asset('teachers/'.$teacher->profile_pic); ?>" width="100" height="100"></td>
            <td><?php echo $teacher->teacher_code; ?></td>
            <td><?php echo $teacher->name; ?></td>
            <td><?php echo $teacher->contact1; ?> | <?php echo $teacher->contact2; ?></td>
            <td><?php echo $teacher->email; ?></td>
            <td>
                <?php if($teacher->status == "active"): ?>
                    <span class="label label-primary">Active</span>
                <?php elseif($teacher->status == "inactive"): ?>
                    <span class="label label-warning">In Active</span>
                <?php else: ?>
                    <span class="label label-danger">Not Available</span>
                <?php endif; ?>
            </td>
            <td><?php echo $teacher->created_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['admin.teachers.destroy', $teacher->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('admin.teachers.show', [$teacher->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('admin.teachers.edit', [$teacher->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>