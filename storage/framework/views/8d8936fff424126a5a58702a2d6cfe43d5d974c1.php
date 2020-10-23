<table class="table table-responsive" id="paymentAccounts-table">
    <thead>
        <th>Name</th>
        <th>Type</th>
        <th>Account</th>
        <th>Status</th>

        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($paymentAccounts as $paymentAccount): ?>
        <tr>
            <td><?php echo $paymentAccount->name; ?></td>
            <td><?php echo $paymentAccount->type; ?></td>
            <td><?php echo $paymentAccount->account; ?></td>

            <td>
                <?php if($paymentAccount->status == "active"): ?>
                    <span class="label label-primary">Active</span>
                <?php elseif($paymentAccount->status == "inactive"): ?>
                    <span class="label label-warning">In Active</span>
                <?php else: ?>
                    <span class="label label-danger">Not Available</span>
                <?php endif; ?>
            </td>
            <td>
                <?php echo Form::open(['route' => ['admin.paymentAccounts.destroy', $paymentAccount->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <?php /*<a href="<?php echo route('admin.paymentAccounts.show', [$paymentAccount->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                    <a href="<?php echo route('admin.paymentAccounts.edit', [$paymentAccount->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>