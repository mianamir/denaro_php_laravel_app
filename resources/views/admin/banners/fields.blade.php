
<!-- Title Field -->
{{--<div class="form-group col-sm-6 col-md-12">--}}
{{--    {!! Form::label('description', 'Details:') !!}--}}
{{--    {!! Form::text('description', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>


<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('button_text', 'Sub Title:') !!}
    {!! Form::text('button_text', null, ['class' => 'form-control']) !!}
</div>
{{--<!-- Title Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('button_url', 'Button Url:') !!}--}}
{{--    {!! Form::text('button_url', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
<!-- Detail Field -->
{{--<div class="form-group col-sm-12 col-md-6">--}}
{{--    {!! Form::label('order_image', 'Image Order:') !!}--}}
{{--    {!! Form::text('order_image', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Image Field -->
{{--<div class="form-group col-sm-3 col-md-6">--}}
{{--    {!! Form::label('background_image', 'Banner Background Image:') !!}--}}
{{--    {!! Form::file('background_image') !!}--}}
{{--</div>--}}

<!-- Image Field -->
<div class="form-group col-sm-3 col-md-6">
    {!! Form::label('image', 'Banner Image:') !!}
    {!! Form::file('image') !!}
</div>

{{--<div class="form-group col-sm-6 col-md-6">--}}
{{--    {!! Form::label('is_active', 'Is Active:') !!}--}}
{{--    <label class="checkbox-inline">--}}
{{--        {!! Form::hidden('is_active', false) !!}--}}
{{--        {!! Form::checkbox('is_active', 1, null) !!} yes--}}
{{--    </label>--}}
{{--</div>--}}
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.banners.index') !!}" class="btn btn-default">Cancel</a>
</div>

{{--<script>--}}
    {{--CKEDITOR.replace( 'description', {--}}
        {{--filebrowserImageBrowseUrl: '{{url('/laravel-filemanager?type=Images')}}'--}}
    {{--});--}}
    {{--CKEDITOR.replace( 'description' );--}}
{{--</script>--}}