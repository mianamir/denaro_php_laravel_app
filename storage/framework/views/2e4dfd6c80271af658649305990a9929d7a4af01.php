<table class="table table-responsive" id="myTable">
    <thead>
        <tr>
            <th>Image</th>
            <th>Code</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($students as $student): ?>
        <tr>
            <td><img src="<?php echo asset('students/'.$student->profile_pic); ?>" width="100" height="100"></td>
            <td>S-<?php echo $student->code; ?></td>
            <td><?php echo $student->name; ?></td>
            <td><?php echo $student->phone; ?></td>
            <td>
                <?php if($student->status == "active"): ?>
                    <span class="label label-primary">Active</span>
                <?php elseif($student->status == "inactive"): ?>
                    <span class="label label-warning">In Active</span>
                <?php else: ?>
                    <span class="label label-danger">Not Available</span>
                <?php endif; ?>
            </td>
            <td>
                <?php echo Form::open(['route' => ['admin.students.destroy', $student->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('admin.students.show', [$student->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('admin.students.edit', [$student->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="<?php echo route('admin.student.course.registration', [$student->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-book"></i></a>
                    <a href="<?php echo route('student.registered.courses.list', [$student->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-th-list"></i></a>

                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>