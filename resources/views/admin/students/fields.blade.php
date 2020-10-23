<!-- Class Id Field -->
<div class="form-group col-sm-6">
    <?php
    $studentclasses = \App\Models\Admin\StudentClass::all();
    ?>
    {!! Form::label('class', 'Student Class:') !!}
    <select name="class_id" class = "form-control" required>
        @foreach($studentclasses as $student_class)
            <option value="{{$student_class->id}}" @if(isset($student)) @if($student->class_id == $student_class->id) selected @endif @endif>
                {{$student_class->title}}
            </option>
        @endforeach
    </select>
</div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Father Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_name', 'Father Name:') !!}
    {!! Form::text('father_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {{--{!! Form::text('email', null, ['class' => 'form-control']) !!}--}}
    <input type="email" name="email" class="form-control" value="{{isset($student) ? old('email', $student->email):""}}" {{isset($student) ? 'readonly':""}}>

</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone, Please type correctly because this is the user name of student:') !!}
    {{--{!! Form::text('phone', null, ['class' => 'form-control']) !!}--}}
    <input type="text" name="phone" placeholder="000-00000000" class="form-control" value="{{isset($student) ? old('phone', $student->phone):""}}" {{isset($student) ? 'readonly':""}}>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {{--{!! Form::password('password', null, ['class' => 'form-control']) !!}--}}
    <input type="password" name="password" class="form-control" value="{{isset($student) ? old('password2', $student->password2):""}}" >
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    <select name="gender" class = "form-control">
        <option value="male" @if(isset($student)) @if($student->gender == "male") selected @endif @endif>Male</option>
        <option value="female" @if(isset($student)) @if($student->gender == "female") selected @endif @endif>Female</option>


    </select>
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>
<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    <select name="type" class = "form-control">
        <option value="direct">Direct</option>
        <option value="teacher">Teacher</option>

    </select>
</div>
@if(isset($student))
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <select class="form-control" name="status" required>

        <option value="active"
                {{isset($student) && $student->status == "active" ?"selected":''}}>Active</option>
        <option value="inactive"
                {{isset($student) && $student->status == "inactive" ?"selected":''}}>InActive</option>

    </select>
</div>
@endif

<!-- Profile Pic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_pic', 'Profile Pic:') !!}
    @if(isset($student))
    <p><img src="{{asset('students/' . $student->profile_pic)}}" width="100" height="100"/></p>
    @endif
    {!! Form::file('profile_pic') !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.students.index') !!}" class="btn btn-default">Cancel</a>
</div>
