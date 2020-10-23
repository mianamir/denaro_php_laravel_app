<table class="table table-responsive" id="myTable" data-order='[[ 0, "desc" ]]'>
    <thead>
        <tr>

            <th>Title</th>
            <th>Status</th>
            <th>Created Date</th>
            <th>Last Modified</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($topics as $topic)
        <tr>
            <td>{!! $topic->title !!}</td>
            <td>
                @if($topic->status == "active")
                    <span class="label label-primary">Active</span>
                @elseif($topic->status == "inactive")
                    <span class="label label-warning">In Active</span>
                @else
                    <span class="label label-danger">Not Available</span>
                @endif
            </td>

            <td>{!! $topic->created_at !!}</td>
            <td>{!! $topic->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.topics.destroy', $topic->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.topics.show', [$topic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.topics.edit', [$topic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>