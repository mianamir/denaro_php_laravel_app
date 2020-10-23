<table class="table table-responsive" id="myTable1" data-order='[[ 0, "desc" ]]'>
    <thead>
        <tr>
            <th>Title</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($courseToTeaches as $courseToTeach)
        <tr>
            <td>{!! $courseToTeach->title !!}</td>

            <td>
                {!! Form::open(['route' => ['admin.courseToTeaches.destroy', $courseToTeach->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {{--<a href="{!! route('admin.courseToTeaches.show', [$courseToTeach->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    <a href="{!! route('admin.courseToTeaches.edit', [$courseToTeach->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                   <a href="{!! route('admin.teachers.by.course.to.teach.index', [$courseToTeach->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-user"></i></a>
                    
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>