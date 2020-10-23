<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Fathername Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fathername', 'Fathername:') !!}
    {!! Form::text('fathername', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact1', 'Contact1:') !!}
    {!! Form::text('contact1', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact2', 'Contact2:') !!}
    {!! Form::text('contact2', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Qualificatioon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qualificatioon', 'Qualificatioon:') !!}
    {!! Form::text('qualificatioon', null, ['class' => 'form-control']) !!}
</div>

<!-- course_to_teach_id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_to_teach_id', 'Course To Teach :') !!}
    <?php
    $course_to_teaches = \App\Models\Admin\CourseToTeach::all();
    ?>
    <select name="course_to_teach_id" class = "form-control">
        @foreach($course_to_teaches as $course_to_teach)
            <option value="{{$course_to_teach->id}}" @if(isset($teacher) && $course_to_teach->id == $teacher->course_to_teach_id) selected="selected" @endif>{{$course_to_teach->title}}</option>
        @endforeach
    </select>
</div>

<!-- Experience Field -->
<div class="form-group col-sm-6">
    {!! Form::label('experience', 'Experience:') !!}
    {!! Form::text('experience', null, ['class' => 'form-control']) !!}
</div>

<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', 'Username:') !!}
    <p>Type username correctly because it will not changeable</p>
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Teacher Code Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('teacher_code', 'Teacher Code:') !!}--}}
    {{--{!! Form::text('teacher_code', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<div class="clearfix"></div>

<!-- Cnic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnic', 'Cnic:') !!}
    {!! Form::text('cnic', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <select name="status" class = "form-control">
        <option value="active">Active</option>
        <option value="inactive">In Active</option>

    </select>
</div>
<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_plan', 'Payment Plan:') !!}
    <?php
    $payment_plans = \App\Models\Admin\PaymentPlan::all()
    ?>
    <select name="payment_plan_id" class = "form-control">
        @foreach($payment_plans as $payment_plan)
        <option value="{{$payment_plan->id}}">Rs. {{$payment_plan->price}}/{{$payment_plan->duration}}</option>
        @endforeach
    </select>
</div>
<!-- Profile Pic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_pic', 'Profile Pic:') !!}
    @if(isset($teacher))
        <p><img src="{{asset('teachers/' . $teacher->profile_pic)}}" width="100" height="100"/></p>
    @endif
    {!! Form::file('profile_pic') !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.teachers.index') !!}" class="btn btn-default">Cancel</a>
</div>
