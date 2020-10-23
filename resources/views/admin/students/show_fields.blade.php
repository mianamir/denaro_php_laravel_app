
<!-- Class Id Field -->
<div class="form-group">
    {!! Form::label('class_id', 'Class:') !!}
    <p>{!! isset($student->student_class) ? $student->student_class->title : "Not Available" !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $student->name !!}</p>
</div>


<!-- Father Name Field -->
<div class="form-group">
    {!! Form::label('father_name', 'Father Name:') !!}
    <p>{!! $student->father_name !!}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{!! $student->phone !!}</p>
</div>

<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{!! $student->password2 !!}</p>
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $student->email !!}</p>
</div>
<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{!! $student->gender !!}</p>
</div>

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('city', 'City:') !!}
    <p>{!! $student->city !!}</p>
</div>
<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    <p>{!! $student->country !!}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{!! $student->type !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Reg. Date:') !!}
    <p>{!! $student->created_at !!}</p>
</div>

<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $student->status !!}</p>
</div>



