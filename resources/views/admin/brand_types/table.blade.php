<table class="table table-responsive" id="brandTypes-table">
    <thead>
        <th>Name</th>
        {{--<th>Created At</th>--}}
        {{--<th>Updated At</th>--}}
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($brandTypes as $brandType)
        <tr>
            <td>{!! $brandType->name !!}</td>
            {{--<td>{!! $brandType->created_at !!}</td>--}}
            {{--<td>{!! $brandType->updated_at !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['admin.brandTypes.destroy', $brandType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {{--<a href="{!! route('admin.brandTypes.show', [$brandType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    <a href="{!! route('admin.brandTypes.edit', [$brandType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>