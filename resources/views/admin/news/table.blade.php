@section('css')
    @include('layouts.datatables_css')
@endsection
<?php
$project = \App\Models\Admin\News::where('id', 1)->first();

?>
<table class="table table-responsive" id="projects-table">
    <thead>
        <th>Title</th>
        <th>Details</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
   
        <tr>
            <td>{!! $project->title !!}</td>
            <td>{!! $project->detail !!}</td>
            <td>{!! $project->created_at !!}</td>
            <td>{!! $project->updated_at !!}</td>
            <td>
                {{--{!! Form::open(['route' => ['admin.news.destroy', $project->id], 'method' => 'delete']) !!}--}}
                <div class='btn-group'>
<            <a href="{!! route('admin.news.edit', [$project->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}-->--}}
                {{--</div>--}}
                {{--{!! Form::close() !!}--}}
            </td>
        </tr>
   
    </tbody>
</table>

@section('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endsection