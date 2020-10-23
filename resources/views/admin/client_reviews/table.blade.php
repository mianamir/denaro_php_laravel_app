<table class="table table-responsive" id="clientReviews-table">
    <thead>
        <th>Image</th>
        <th>Name</th>
        <th>Detail</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($clientReviews as $clientReview)
        <tr>
            <td>{!! $clientReview->image !!}</td>
            <td>{!! $clientReview->name !!}</td>
            <td>{!! $clientReview->detail !!}</td>
            <td>{!! $clientReview->created_at !!}</td>
            <td>{!! $clientReview->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.clientReviews.destroy', $clientReview->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.clientReviews.show', [$clientReview->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.clientReviews.edit', [$clientReview->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>