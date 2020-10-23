<table class="table table-responsive" id="subjects-table">
    <thead>
        <th>Image</th>
        <th>Video Image</th>
        <th>Promo Video</th>
        <th>Title</th>
        <th>Type</th>
        <th>Price</th>
        <th>Is Featured</th>
        <th>Status</th>
        <th>Created Date</th>
        <th>Last Updated</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($subjects as $subject): ?>
        <tr>
            <td>
                <?php if($subject->image != null): ?>
                    <image src="<?php echo e(asset($subject->image)); ?>" width="100" height="100"/>
                <?php else: ?>
                <p class="label label-primary">Image Not Available</p>
                <?php endif; ?>

            </td>
            <td>
                <?php if($subject->promo_video_featured_image != null): ?>
                    <image src="<?php echo e(asset($subject->promo_video_featured_image)); ?>" width="100" height="100"/>
                <?php else: ?>
                    <p class="label label-primary">Image Not Available</p>
                <?php endif; ?>

            </td>
            <td>
                <?php if($subject->promo_video != null): ?>
                    <image src="<?php echo e(asset($subject->promo_video)); ?>" width="100" height="100"/>
                <?php else: ?>
                    <p class="label label-primary">Video Not Available</p>
                <?php endif; ?>

            </td>

            <td><?php echo $subject->title; ?></td>
            <?php if($subject->subject_type_id != null): ?>
                <td><?php echo $subject->subject_type->title; ?></td>
            <?php else: ?>
                <td>Not Available</td>
            <?php endif; ?>
            
            <td><?php echo $subject->price; ?></td>
            <td>
                <?php if($subject->is_featured == 1): ?>
                    <span class="label label-primary">Yes</span>
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
            <td><?php echo $subject->created_at; ?></td>
            <td><?php echo $subject->updated_at; ?></td>


            <td>
                <?php echo Form::open(['route' => ['admin.subjects.destroy', $subject->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <?php /*<a href="<?php echo route('admin.subjects.show', [$subject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                    <a href="<?php echo route('admin.subjects.edit', [$subject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php /*<?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>*/ ?>
                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>