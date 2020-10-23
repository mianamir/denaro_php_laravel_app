<ul>
    @foreach($childs as $child)
        <li>
            {{ $child->name }}<a href="{!! route('admin.categories.edit', [$child->id]) !!}"><i
                        class="glyphicon glyphicon-edit"></i></a>
            {!! Form::open(['route' => ['admin.categories.destroy', $child->id], 'method' => 'delete']) !!}
                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
            {!! Form::close() !!}
            @if(count($child->childs))
                @include('admin.categories.manageChild',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>