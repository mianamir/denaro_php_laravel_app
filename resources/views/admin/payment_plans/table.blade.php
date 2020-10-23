<table class="table table-responsive" id="paymentPlans-table">
    <thead>
        <th>Price</th>
        <th>Duration</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($paymentPlans as $paymentPlan)
        <tr>
            <td>{!! $paymentPlan->price !!}</td>
            <td>{!! $paymentPlan->duration !!}</td>
            <td>
                @if($paymentPlan->status == "active")
                    <span class="label label-primary">Active</span>
                @elseif($paymentPlan->status == "inactive")
                    <span class="label label-warning">In Active</span>
                @else
                    <span class="label label-danger">Not Available</span>
                @endif
            </td>

            <td>
                {!! Form::open(['route' => ['admin.paymentPlans.destroy', $paymentPlan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {{--<a href="{!! route('admin.paymentPlans.show', [$paymentPlan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    <a href="{!! route('admin.paymentPlans.edit', [$paymentPlan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>