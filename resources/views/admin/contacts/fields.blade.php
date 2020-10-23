<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

{{--<!-- Phone4 Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('phone4', 'Sub-Title:') !!}--}}
    {{--{!! Form::text('phone4', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone1', 'Phone:') !!}
    {!! Form::text('phone1', null, ['class' => 'form-control']) !!}
</div>

{{--<!-- Phone2 Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('phone2', 'Mob1:') !!}--}}
    {{--{!! Form::text('phone2', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Phone3 Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('phone3', 'Mob2:') !!}--}}
    {{--{!! Form::text('phone3', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}



{{--<!-- Fax Field -->--}}
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Map:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>
<!-- Fax Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('postal', 'Postal:') !!}--}}
    {{--{!! Form::text('postal', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Website Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('image', 'Image:') !!}--}}
    {{--{!! Form::file('image', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.contacts.index') !!}" class="btn btn-default">Cancel</a>
</div>
