<!-- Student Class Id Field -->
<div class="form-group col-sm-6">
    <?php
    $student_classes = \App\Models\Admin\StudentClass::all();

    ?>
    {!! Form::label('student_class_id', 'Class:') !!}
    <select name="student_class_id" class = "form-control">
        <option value="-1">Select Class</option>
        @foreach($student_classes as $student_class)
            <option value="{{$student_class->id}}">
                {{$student_class->title}}
            </option>
        @endforeach
    </select>
</div>


<!-- Subject Id Field -->
<div class="form-group col-sm-6">
    <?php
    $subjects = \App\Models\Admin\Subject::all();

    ?>
    {!! Form::label('subject_id', 'Subject:') !!}
    <select name="subject_id" class = "form-control">
        <option value="-1">Select Subject</option>
        @foreach($subjects as $subject)
            <option value="{{$subject->id}}">
                {{$subject->title}}
            </option>
        @endforeach
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.classSubjects.index') !!}" class="btn btn-default">Cancel</a>
</div>
