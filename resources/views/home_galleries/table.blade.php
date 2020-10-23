<table class="table table-responsive" id="homeGalleries-table">
    <thead>
        <th>Title</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($homeGalleries as $homeGallery)
        <tr>
            <td>{!! $homeGallery->title !!}</td>
            <td>{!! $homeGallery->created_at !!}</td>
            <td>{!! $homeGallery->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['homeGalleries.destroy', $homeGallery->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('homeGalleries.show', [$homeGallery->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('homeGalleries.edit', [$homeGallery->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>