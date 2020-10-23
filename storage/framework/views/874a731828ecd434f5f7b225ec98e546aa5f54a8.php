<table class="table table-responsive" id="paymentPlans-table">
    <thead>
        <th>Price</th>
        <th>Duration</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($paymentPlans as $paymentPlan): ?>
        <tr>
            <td><?php echo $paymentPlan->price; ?></td>
            <td><?php echo $paymentPlan->duration; ?></td>
            <td>
                <?php if($paymentPlan->status == "active"): ?>
                    <span class="label label-primary">Active</span>
                <?php elseif($paymentPlan->status == "inactive"): ?>
                    <span class="label label-warning">In Active</span>
                <?php else: ?>
                    <span class="label label-danger">Not Available</span>
                <?php endif; ?>
            </td>

            <td>
                <?php echo Form::open(['route' => ['admin.paymentPlans.destroy', $paymentPlan->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <?php /*<a href="<?php echo route('admin.paymentPlans.show', [$paymentPlan->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                    <a href="<?php echo route('admin.paymentPlans.edit', [$paymentPlan->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>