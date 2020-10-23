<table class="table table-responsive" id="clients-table">
    <thead>

        <th>Name</th>
        <th>Image</th>
        {{--<th>Created At</th>--}}
        {{--<th>Updated At</th>--}}
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{!! $client->detail !!}</td>
            <td><img src="{{asset($client->image)}}" width="100" height="100"></td>

            {{--<td>{!! $client->created_at !!}</td>--}}
            {{--<td>{!! $client->updated_at !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['admin.clients.destroy', $client->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.clients.show', [$client->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.clients.edit', [$client->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>