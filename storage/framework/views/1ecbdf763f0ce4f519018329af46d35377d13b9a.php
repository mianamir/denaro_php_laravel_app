<table class="table table-responsive" id="classSubjects-table">
    <thead>
        <th>Class</th>
        <th>Subject</th>
        <?php /*<th>Created At</th>*/ ?>
        <?php /*<th>Updated At</th>*/ ?>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($classSubjects as $classSubject): ?>
        <?php
        $class_name = \App\Models\Admin\StudentClass::
        where('id', $classSubject->student_class_id)->first();
        $subject = \App\Models\Admin\Subject::
        where('id', $classSubject->subject_id)->first();
        ?>
        <tr>
            <td><?php echo $class_name->title; ?></td>
            <td><?php echo $subject->title; ?></td>
            <?php /*<td><?php echo $classSubject->created_at; ?></td>*/ ?>
            <?php /*<td><?php echo $classSubject->updated_at; ?></td>*/ ?>
            <td>
                <?php echo Form::open(['route' => ['admin.classSubjects.destroy', $classSubject->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <?php /*<a href="<?php echo route('admin.classSubjects.show', [$classSubject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                    <a href="<?php echo route('admin.classSubjects.edit', [$classSubject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php /*<?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>*/ ?>
                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>