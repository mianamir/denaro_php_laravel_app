<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Details Field -->
<div class="form-group col-sm-12 col-lg-6">
    {!! Form::label('details', 'URL:') !!}
    {!! Form::text('details', null, ['class' => 'form-control']) !!}
</div>

<!-- Show In Navigation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('show_in_navigation', 'Status') !!}
    {!! Form::select('show_in_navigation', ['0' => 'No','1'=>'Yes'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.authors.index') !!}" class="btn btn-default">Cancel</a>
</div>
