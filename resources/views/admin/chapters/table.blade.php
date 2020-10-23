<table class="table table-responsive" data-order='[[ 0, "desc" ]]' id="myTable">
    <thead>
        <tr>
            <th>Title</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($chapters as $chapter)
        <tr>

            <td>{!! $chapter->title !!}</td>
            <td>{!! $chapter->details !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.chapters.destroy', $chapter->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.topics.index', [$chapter->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-book"></i></a>
                    <a href="{!! route('admin.chapters.edit', [$chapter->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>