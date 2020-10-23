<table class="table table-responsive" id="myTable" data-order='[[ 0, "desc" ]]'>
    <thead>
        <tr>

            <th>Title</th>
            <th>#Code</th>
            <th>Study Group</th>
            <th>Type</th>
            <th>Price</th>
            <th>Is Featured</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($subjects as $subject)
        <tr>
            <td>{!! $subject->title !!}</td>
            <td>C-{!! $subject->code !!}</td>
            <td>{!! isset($subject->course_to_teach->title) ? $subject->course_to_teach->title : "Not Available" !!}</td>
            <td>{!! isset($subject->subject_type->title) ? $subject->subject_type->title : "Not Available" !!}</td>
            <td>{!! $subject->price !!}</td>
            <td>
                @if($subject->is_featured == 1)
                    <span class="label label-info">Yes</span>
                @else
                    <span class="label label-warning">No</span>
                @endif
            </td>
            <td>
                @if($subject->status == "active")
                    <span class="label label-primary">Active</span>
                @elseif($subject->status == "inactive")
                    <span class="label label-warning">In Active</span>
                @else
                    <span class="label label-danger">Not Available</span>
                @endif
            </td>
         <td>
                {{--{!! Form::open(['route' => ['admin.subjects.destroy', $subject->id], 'method' => 'delete']) !!}--}}
                <div class='btn-group'>
                    <a href="{!! route('admin.subjects.show', [$subject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.subjects.edit', [$subject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('admin.chapters.index', [$subject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-book"></i></a>
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>