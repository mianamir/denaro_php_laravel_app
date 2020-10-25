@extends('admin2.layouts.master')
@section('content')
    <section class="content-header">
        <h1>
           Video Gallery
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">


                    <form action="{{route('admin.galleries.update', [$gallery->id])}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Error!</strong> please provide below form fields.<br><br>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(Session::has('cate_id'))
                            <div class="alert alert-danger">
                                {{ Session::get('cat_id') }}
                            </div>
                        @endif
                        @if(Session::has('name'))
                            <div class="alert alert-danger">
                                {{ Session::get('name') }}
                            </div>
                        @endif
{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group">--}}
{{--                                <?php--}}
{{--                                $categories = \App\Models\Admin\HomeGallery::get();--}}
{{--                                ?>--}}
{{--                                <label>Category</label><br>--}}
{{--                                <select class="form-control" name="cat_id">--}}
{{--                                    <option value="-1">Category</option>--}}
{{--                                    @foreach($categories as $category)--}}
{{--                                        <option value="{{$category->id}}"--}}
{{--                                                @if($category->id == $gallery->cat_id) selected="selected" @endif>{{$category->title}}</option>--}}
{{--                                    @endforeach--}}

{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input id="" name="name" value="{{old('name', $gallery->name)}}" type="text" class="form-control">
                            </div>
                        </div>



{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Image</label>--}}

{{--                                <input id="" name="image" type="file" class="form-control">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Image Order</label>--}}

{{--                                <input id="" name="order_image" value="{{old('order_image', $gallery->order_image)}}" type="text" class="form-control">--}}
{{--                            </div>--}}
{{--                        </div>--}}


                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="" value="Save" class="btn btn-primary">
                                <a href="{{route('admin.galleries.index')}}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection