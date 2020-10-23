<!-- Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
</div>


<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('heading', 'Heading:') !!}--}}
{{--    {!! Form::text('heading', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}


{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('keyword', 'Meta Keywords:') !!}--}}
{{--    {!! Form::text('meta_keywords', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Meta Description Field -->--}}
{{--<div class="form-group col-sm-12 col-lg-6">--}}
{{--    {!! Form::label('meta_description', 'Meta Description:') !!}--}}
{{--    {!! Form::text('meta_description', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}



<!-- Image Field -->
<div class="form-group col-lg-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.pages.index') !!}" class="btn btn-default">Cancel</a>
</div>
