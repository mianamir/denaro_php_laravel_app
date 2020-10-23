<table class="table table-responsive" id="myTable1" data-order='[[ 0, "desc" ]]'>
    <thead>
        <tr>
            <th>Title</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($courseToTeaches as $courseToTeach): ?>
        <tr>
            <td><?php echo $courseToTeach->title; ?></td>

            <td>
                <?php echo Form::open(['route' => ['admin.courseToTeaches.destroy', $courseToTeach->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <?php /*<a href="<?php echo route('admin.courseToTeaches.show', [$courseToTeach->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                    <a href="<?php echo route('admin.courseToTeaches.edit', [$courseToTeach->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>