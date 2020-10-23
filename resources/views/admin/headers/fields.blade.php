<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}
    {!! Form::file('logo') !!}
</div>
<div class="clearfix"></div>

<!-- Image1 Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('image1', 'Image1:') !!}--}}
    {{--{!! Form::file('image1') !!}--}}
{{--</div>--}}
{{--<div class="clearfix"></div>--}}

{{--<!-- Image2 Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('image2', 'Image2:') !!}--}}
    {{--{!! Form::file('image2') !!}--}}
{{--</div>--}}
{{--<div class="clearfix"></div>--}}

<!-- Phone Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('phone', 'Phone:') !!}--}}
    {{--{!! Form::text('phone', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.headers.index') !!}" class="btn btn-default">Cancel</a>
</div>
