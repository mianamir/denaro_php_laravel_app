<table class="table table-responsive" id="myTable1" data-order='[[ 0, "desc" ]]'>
    <thead>
       <tr>
           <th>Heading</th>
           <th>Sub Heading</th>
           <?php /*<th>Description</th>*/ ?>

           <th>Image</th>
<?php /*           <th>Order</th>*/ ?>
<?php /*           <th>Status</th>*/ ?>
           <th>Action</th>
       </tr>
    </thead>
    <tbody>
    <?php

    ?>
    <?php foreach($banners as $banner): ?>
        <tr>
            <td><?php echo $banner->title; ?></td>
            <td><?php echo $banner->button_text; ?></td>
            <?php /*<td><?php echo $banner->description; ?></td>*/ ?>

            <td><img src="<?php echo e(asset($banner->image)); ?>" width="100" height="100"/> </td>
<?php /*            <td><?php echo $banner->order_image; ?></td>*/ ?>
<?php /*            <td>*/ ?>
<?php /*                <?php if($banner->is_active == 1): ?>*/ ?>
<?php /*                    <span class="label label-success">Active</span>*/ ?>
<?php /*                <?php else: ?>*/ ?>
<?php /*                    <span class="label label-info">Not Active</span>*/ ?>
<?php /*                <?php endif; ?>*/ ?>
<?php /*            </td>*/ ?>
            <td>
                <?php echo Form::open(['route' => ['admin.banners.destroy', $banner->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
<!--                    <a href="<?php echo route('admin.banners.show', [$banner->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>-->
                    <a href="<?php echo route('admin.banners.edit', [$banner->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                   <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>