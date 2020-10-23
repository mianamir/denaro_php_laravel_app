@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Sub Category
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                {!! Form::model($subCategory, ['route' => ['admin.subCategories.update', $subCategory->id], 'method' => 'patch', 'files'=>true]) !!}

                <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Category Id Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('category_id', 'Category Id:') !!}
                        <?php

                        $categories = \App\Models\Admin\Category::all();

                        ?>

                        <select class="form-control" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{$category->id==$subCategory->category_id? "selected":""}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Url Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('url', 'Url:') !!}
                        {!! Form::text('url', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Slug Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('slug', 'Slug:') !!}
                        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Title Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('title', 'Title:') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Meta Keywords Field -->
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::label('meta_keywords', 'Meta Keywords:') !!}
                        {!! Form::textarea('meta_keywords', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Meta Description Field -->
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::label('meta_description', 'Meta Description:') !!}
                        {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Image Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('image', 'Image:') !!}
                        {!! Form::file('image') !!}
                    </div>
                    <div class="clearfix"></div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{!! route('admin.subCategories.index') !!}" class="btn btn-default">Cancel</a>
                    </div>


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection