@extends('admin2.layouts.master')
@section('content')
    <section class="content-header">
        <h1 class="pull-left">Galleries</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"
               href="{!! route('admin.galleries.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="demo1">

                    <thead>

                    <tr>
{{--                        <th>Category</th>--}}
                        <th>Name</th>
{{--                        <th>Image</th>--}}
{{--                        <th>Image Order</th>--}}
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($galleries as $gallery)
                        <?php
//                        $category = \App\Models\Admin\HomeGallery::where('id',$gallery->cat_id)->first();


                        ?>
                        <tr>
{{--                            <td>--}}
{{--                                @if($category != null)--}}
{{--                                    {!! $category->title !!}--}}
{{--                                @else--}}
{{--                                    Not Available--}}
{{--                                @endif--}}
{{--                            </td>--}}
{{--                            <td>{!! $gallery->name !!}</td>--}}
                            <td>
                                <iframe width="250" height="250" src="https://www.youtube.com/embed/{{$gallery->name}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </td>
{{--                            <td><img src="{{asset($gallery->image)}}" width="200" height="70"></td>--}}
{{--                            <td>{!! $gallery->order_image !!}</td>--}}
                            <td>
                                {!! Form::open(['route' => ['admin.galleries.destroy', $gallery->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    {{--<a href="{!! route('admin.clients.show', [$client->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                    <a href="{!! route('admin.galleries.edit', [$gallery->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
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
@section('postJquery')
    @parent

@endsection

