<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p><image src="{{asset($page->image)}}" width="100" height="100"/></p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Heading:') !!}
    <p>{!! $page->heading !!}</p>
</div>


<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $page->title !!}</p>
</div>


<!-- Meta Description Field -->
<div class="form-group">
    {!! Form::label('meta_keywords', 'Meta Keywords:') !!}
    <p>{!! $page->meta_keywords !!}</p>
</div>

<!-- Meta Description Field -->
<div class="form-group">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    <p>{!! $page->meta_description !!}</p>
</div>


<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    <p>{!! $page->details !!}</p>
</div>
