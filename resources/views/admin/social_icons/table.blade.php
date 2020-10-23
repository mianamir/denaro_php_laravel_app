<table class="table table-responsive" id="socialIcons-table">
    <thead>
        <th>Name</th>
        <th>Url</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($socialIcons as $socialIcon)
        <tr>
            <td>{!! $socialIcon->name !!}</td>
            <td>{{ $socialIcon->url }}</td>
            <td>{!! $socialIcon->created_at !!}</td>
            <td>{!! $socialIcon->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.socialIcons.destroy', $socialIcon->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
<!--                    <a href="{!! route('admin.socialIcons.show', [$socialIcon->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>-->
                    <a href="{!! route('admin.socialIcons.edit', [$socialIcon->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
<!--                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}-->
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>