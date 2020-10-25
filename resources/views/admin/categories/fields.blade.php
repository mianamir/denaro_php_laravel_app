<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

{{--<!-- Url Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('url', 'Url:') !!}--}}
{{--    {!! Form::text('url', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Title Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('title', 'Title:') !!}--}}
    {{--{!! Form::text('title', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Meta Keywords Field -->--}}
{{--<div class="form-group col-sm-12 col-lg-12">--}}
    {{--{!! Form::label('details', 'Details:') !!}--}}
    {{--{!! Form::textarea('details', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
{{--<div class="form-group col-sm-12 col-lg-12">--}}
    {{--{!! Form::label('meta_keywords', 'Meta Keywords:') !!}--}}
    {{--{!! Form::textarea('meta_keywords', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Meta Description Field -->--}}
{{--<div class="form-group col-sm-12 col-lg-12">--}}
    {{--{!! Form::label('meta_description', 'Meta Description:') !!}--}}
    {{--{!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<div class="form-group col-sm-12 col-lg-12">

    {!! Form::label('image', 'image:') !!}
    {!! Form::file('image') !!}
</div>

<!-- Parent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_id', 'Project Parent Category:') !!}


    <?php
    $categories = \App\Models\Admin\Category::where('parent_id', 0)->get();
    ?>
    @if(isset($category))
        <?php
            $categories = \App\Models\Admin\Category::where('id','!=',$category->id)->get();
        ?>
    @endif

    <select class="form-control" name="parent_id">

        <option value="">Project Category Parent</option>
        @foreach( $categories as $cat)
            <option value="{{$cat->id}}" {{isset($category) && $category->parent_id == $cat->id ?"selected":''}}>{{$cat->name}}</option>
        @endforeach

    </select>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.categories.index') !!}" class="btn btn-default">Cancel</a>
</div>

<script>
    CKEDITOR.replace( 'details', {
        filebrowserImageBrowseUrl: '{{url('/laravel-filemanager?type=Images')}}'
    });
</script>