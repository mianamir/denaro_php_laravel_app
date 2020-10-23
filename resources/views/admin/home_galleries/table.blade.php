<table class="table table-responsive" id="homeGalleries-table">
    <thead>
        <th>Title</th>
        <th>Image</th>
        <th>Image Order</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($homeGalleries as $homeGallery)
        <tr>
            <td>{!! $homeGallery->title !!}</td>
            <td><image src="{{asset($homeGallery->image)}}" width="100" height="100"/></td>
            <td>{!! $homeGallery->order_image !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.homeGalleries.destroy', $homeGallery->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
<!--                    <a href="{!! route('admin.homeGalleries.show', [$homeGallery->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>-->
                    <a href="{!! route('admin.homeGalleries.edit', [$homeGallery->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>