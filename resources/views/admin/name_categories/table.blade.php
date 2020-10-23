<table class="table table-responsive" id="nameCategories-table">
    <thead>
        <th>ID</th>
        <th>Name Ar</th>
        <th>Name Ar</th>
        <th>Url</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($nameCategories as $nameCategory)
        <tr>
            <td>{!! $nameCategory->id !!}</td>
            <td>{!! $nameCategory->name_ar !!}</td>
            <td>{!! $nameCategory->name_ar !!}</td>
            <td>{!! $nameCategory->url !!}</td>
            <td>{!! $nameCategory->created_at !!}</td>
            <td>{!! $nameCategory->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.nameCategories.destroy', $nameCategory->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.nameCategories.show', [$nameCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.nameCategories.edit', [$nameCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>