<table class="table table-responsive" id="paymentAccounts-table">
    <thead>
        <th>Name</th>
        <th>Type</th>
        <th>Account</th>
        <th>Status</th>

        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($paymentAccounts as $paymentAccount)
        <tr>
            <td>{!! $paymentAccount->name !!}</td>
            <td>{!! $paymentAccount->type !!}</td>
            <td>{!! $paymentAccount->account !!}</td>

            <td>
                @if($paymentAccount->status == "active")
                    <span class="label label-primary">Active</span>
                @elseif($paymentAccount->status == "inactive")
                    <span class="label label-warning">In Active</span>
                @else
                    <span class="label label-danger">Not Available</span>
                @endif
            </td>
            <td>
                {!! Form::open(['route' => ['admin.paymentAccounts.destroy', $paymentAccount->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {{--<a href="{!! route('admin.paymentAccounts.show', [$paymentAccount->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    <a href="{!! route('admin.paymentAccounts.edit', [$paymentAccount->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>