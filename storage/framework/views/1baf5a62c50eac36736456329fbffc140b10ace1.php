<table class="table table-responsive" data-order='[[ 0, "desc" ]]' id="myTable">
    <thead>
        <tr>
            <th>Title</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($chapters as $chapter): ?>
        <tr>

            <td><?php echo $chapter->title; ?></td>
            <td><?php echo $chapter->details; ?></td>
            <td>
                <?php echo Form::open(['route' => ['admin.chapters.destroy', $chapter->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('admin.topics.index', [$chapter->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-book"></i></a>
                    <a href="<?php echo route('admin.chapters.edit', [$chapter->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>