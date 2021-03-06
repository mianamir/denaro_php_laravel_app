@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Project Category</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.categories.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="myTable">
                    <thead>
                    <th>Project Category Parent</th>
                    <th>Project Category</th>
                    <th>Image</th>
                    <th colspan="3">Actions</th>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <?php
                            $categories_parents = \App\Models\Admin\Category::
                            where('parent_id','=',0)->get();
                            ?>
                            @if($category->parent_id != 0)
                            @foreach ($categories_parents as $parent_category)
                            @if($parent_category->id == $category->parent_id)
                            <td>{{$parent_category->name}}</td>
                            @endif
                            @endforeach
                            @else
                            <td>"Parent"</td>
                            @endif
                            <td>{{$category->name}}</td>

                            <td><img src="{{asset($category->image)}}" style="width: 100px; height: 100px"></td>
                            <td>
                                {!! Form::open(['route' => ['admin.categories.destroy', $supplier->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    {{--<a href="{!! route('admin.categories.show', [$supplier->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                    <a href="{!! route('admin.categories.edit', [$category->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>

                                    @if($category->parent_id == 0 and ($category->id != 14 or $category->id != 17))
                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}

                                    @endif

                                    </div>
                                {!! Form::close() !!}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

