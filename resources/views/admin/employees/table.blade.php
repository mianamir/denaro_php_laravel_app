<table class="table table-responsive" id="employees-table">
    <thead>
        <th>Name</th>
        <th>Eamil</th>
        <th>Cnic</th>
        <th>Phone</th>
        <th>Image</th>
        <th>Salary</th>
        <th>Address</th>
        <th>City</th>
        <th>Country</th>
        <th>Status</th>
        <th>Type</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($employees as $employee)
        <tr>
            <td>{!! $employee->name !!}</td>
            <td>{!! $employee->eamil !!}</td>
            <td>{!! $employee->cnic !!}</td>
            <td>{!! $employee->phone !!}</td>
            <td>{!! $employee->image !!}</td>
            <td>{!! $employee->salary !!}</td>
            <td>{!! $employee->address !!}</td>
            <td>{!! $employee->city !!}</td>
            <td>{!! $employee->country !!}</td>
            <td>{!! $employee->status !!}</td>
            <td>{!! $employee->type !!}</td>
            <td>{!! $employee->created_at !!}</td>
            <td>{!! $employee->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.employees.destroy', $employee->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.employees.show', [$employee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.employees.edit', [$employee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>