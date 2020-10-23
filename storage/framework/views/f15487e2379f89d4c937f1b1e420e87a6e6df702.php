<table class="table table-responsive" id="myTable" data-order='[[ 0, "desc" ]]'>
    <thead>
        <tr>

            <th>Title</th>
            <th>#Code</th>
            <th>Study Group</th>
            <th>Type</th>
            <th>Price</th>
            <th>Is Featured</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($subjects as $subject): ?>
        <tr>
            <td><?php echo $subject->title; ?></td>
            <td>C-<?php echo $subject->code; ?></td>
            <td><?php echo isset($subject->course_to_teach->title) ? $subject->course_to_teach->title : "Not Available"; ?></td>
            <td><?php echo isset($subject->subject_type->title) ? $subject->subject_type->title : "Not Available"; ?></td>
            <td><?php echo $subject->price; ?></td>
            <td>
                <?php if($subject->is_featured == 1): ?>
                    <span class="label label-info">Yes</span>
                <?php else: ?>
                    <span class="label label-warning">No</span>
                <?php endif; ?>
            </td>
            <td>
                <?php if($subject->status == "active"): ?>
                    <span class="label label-primary">Active</span>
                <?php elseif($subject->status == "inactive"): ?>
                    <span class="label label-warning">In Active</span>
                <?php else: ?>
                    <span class="label label-danger">Not Available</span>
                <?php endif; ?>
            </td>
         <td>
                <?php /*<?php echo Form::open(['route' => ['admin.subjects.destroy', $subject->id], 'method' => 'delete']); ?>*/ ?>
                <div class='btn-group'>
                    <a href="<?php echo route('admin.subjects.show', [$subject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('admin.subjects.edit', [$subject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="<?php echo route('admin.chapters.index', [$subject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-book"></i></a>
                    <?php /*<?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>*/ ?>
                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>