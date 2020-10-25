<table class="table table-responsive" id="myTable">
    <thead>
    <th>Name</th>
    {{--<th>Url</th>--}}
    {{--<th>Title</th>--}}
    <th>Parent Id</th>
    {{--<th>Created At</th>--}}
    {{--<th>Updated At</th>--}}
    <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{!! $category->name !!}</td>
            {{--<td>{!! $category->url !!}</td>--}}
            {{--<td>{!! $category->title !!}</td>--}}
            <td>{!! $category->parent_id !!}</td>
            {{--<td>{!! $category->created_at !!}</td>--}}
            {{--<td>{!! $category->updated_at !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['admin.categories.destroy', $category->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.categories.show', [$category->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.categories.edit', [$category->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach

    <ul id="tree1">
        @foreach($categories as $category)
            <li>
                {{ $category->name }} <a href="{!! route('admin.categories.edit', [$category->id]) !!}"><i
                            class="glyphicon glyphicon-edit"></i></a>
                {!! Form::open(['route' => ['admin.categories.destroy', $category->id], 'method' => 'delete', 'class' => 'form-inline']) !!}
                <span class=".btn-group-justified" >
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </span>
                {!! Form::close() !!}
                @if(count($category->childs))
                    @include('admin.categories.manageChild',['childs' => $category->childs])
                @endif


            </li>
        @endforeach
    </ul>

    </tbody>
</table>


<style>
    .tree, .tree ul {
        margin: 0;
        padding: 0;
        list-style: none
    }

    .tree ul {
        margin-left: 1em;
        position: relative
    }

    .tree ul ul {
        margin-left: .5em
    }

    .tree ul:before {
        content: "";
        display: block;
        width: 0;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        border-left: 1px solid
    }

    .tree li {
        margin: 0;
        padding: 0 1em;
        line-height: 2em;
        color: #369;
        font-weight: 700;
        position: relative
    }

    .tree ul li:before {
        content: "";
        display: block;
        width: 10px;
        height: 0;
        border-top: 1px solid;
        margin-top: -1px;
        position: absolute;
        top: 1em;
        left: 0
    }

    .tree ul li:last-child:before {
        background: #fff;
        height: auto;
        top: 1em;
        bottom: 0
    }

    .indicator {
        margin-right: 5px;
    }

    .tree li a {
        text-decoration: none;
        color: #369;
    }

    .tree li button, .tree li button:active, .tree li button:focus {
        text-decoration: none;
        color: #369;
        border: none;
        background: transparent;
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
        outline: 0;
    }
    .btn-group { display: inline-block; }
</style>

