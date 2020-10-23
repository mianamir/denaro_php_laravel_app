<table class="table table-responsive" id="services-table">
    <thead>
    <th>Title</th>
    <th>Image</th>
    <th>PDF</th>
    <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($services as $service)
        <tr>
            <td>{!! $service->title !!}</td>
            <td><image src="{{asset($service->image)}}" height="100" width="100"/></td>

            <td><a href="{{url($service->file)}}" target="_blank">View File</a> </td>

            <td>
                {!! Form::open(['route' => ['admin.services.destroy', $service->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.services.show', [$service->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.services.edit', [$service->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>