<?php
$projects = \App\Models\Admin\Page::all();

?>
<table class="table table-responsive" id="projects-table">
    <thead>
        <th>Name</th>
        <th>Title</th>
        {{--<th>Details</th>--}}
        
        {{--<th>Updated At</th>--}}
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($projects as $project)
        <tr>
            <td>{!! $project->name !!}</td>
            <td>{!! $project->title !!}</td>
            {{--<td>{!! $project->details !!}</td>--}}
            
            {{--<td>{!! $project->updated_at !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['admin.pages.destroy', $project->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                   <a href="{!! route('admin.pages.show', [$project->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.pages.edit', [$project->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
<!--                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}-->
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
