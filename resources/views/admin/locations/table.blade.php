<table class="table table-responsive" id="locations-table">
    <thead>
    <th>Name</th>
    <th>Image</th>
    <th>Published</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($locations as $location)
        <tr>
            <td>{!! $location->name !!}</td>
            <td><img src="{{asset($location->image)}}" style="width: 200px"></td>
            <td>{!! $location->published !!}</td>
            <td>{!! $location->created_at !!}</td>
            <td>{!! $location->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.locations.destroy', $location->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.locations.show', [$location->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.locations.edit', [$location->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>