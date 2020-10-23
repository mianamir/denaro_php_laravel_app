<div class="row" style="">
    <!-- Image Field -->
    <div class="col-md-4">
        @if(isset($subject))
            <img class="img-responsive" width="100" height="100" src="{{asset('subjects/'. $subject->image)}}"/>
        @endif
        {!! Form::label('image', 'Subject Image:') !!}
        {{--{!! Form::file('image') !!}--}}
        <input type="file" class="form-control" name="image">
    </div>
    <!-- Image Field -->
    <div class="col-md-4">
        @if(isset($subject))
            <img class="img-responsive" width="100" height="100" src="{{asset('subjects/'. $subject->promo_video_featured_image)}}"/>

        @endif
        {!! Form::label('promo_video_featured_image', 'Video Featured Image:') !!}
        {{--{!! Form::file('promo_video_featured_image') !!}--}}
            <input type="file" class="form-control" name="promo_video_featured_image">
    </div>
    <!-- Image Field -->
    <div class="col-md-4">

        @if(isset($subject) && $subject->promo_video != null)
            <iframe width="100" height="100" poster="{{asset('subjects/' . $subject->featured_image)}}" src="{{$subject->promo_video}}" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            {{--<image src="{{asset($subject->promo_video)}}" width="100" height="100"/>--}}
        @else
            <p class="label label-primary">Video Not Available</p>
        @endif



        {!! Form::label('promo_video', 'Promo Video Youtube URL:') !!}
        {{--{!! Form::file('promo_video') !!}--}}
        {!! Form::text('promo_video', null, ['class' => 'form-control']) !!}
    </div>
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Short Details:') !!}
    {!! Form::text('short_details', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php
    $subject_types = \App\Models\Admin\SubjectType::all();

    ?>
    {!! Form::label('subject_type_id', 'Subject Type:') !!}
    <select name="subject_type_id" class = "form-control">
        <option value="-1">Select Subject Type</option>
        @foreach($subject_types as $subject_type)
        <option value="{{$subject_type->id}}" @if(isset($subject)) @if($subject->subject_type_id==$subject_type->id) selected @endif @endif >
            {{$subject_type->title}}
        </option>
        @endforeach
    </select>
</div>


<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php
    $studentclasses = \App\Models\Admin\StudentClass::all();

    ?>
    {!! Form::label('calss', 'Subject Class:') !!}
    <select name="class_id" class = "form-control" required>
        <option value="">Select Class</option>
        @foreach($studentclasses as $subject_class)
            <option value="{{$subject_class->id}}" @if(isset($subject)) @if($subject->class_id == $subject_class->id) selected @endif @endif>
                {{$subject_class->title}}
            </option>
        @endforeach
    </select>
</div>



<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <select name="status" class = "form-control" required>
        {{--<option value="-1">Select Status</option>--}}
        <option value="active" {{isset($subject) && $subject->status == "active" ?"selected":''}}>Active</option>
        <option value="inactive" {{isset($subject) && $subject->status == "inactive" ?"selected":''}}>In Active</option>

    </select>
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>
<!-- course_to_teach_id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_type_id', 'Course Type:') !!}
    <?php
    $course_types = \App\Models\Admin\CourseToTeach::all()
    ?>
    <select name="course_type_id" id="course_type_id" class = "form-control" required>
        <option value="-1">Select Course Study Group</option>
        @foreach($course_types as $course_type)
            <option value="{{$course_type->id}}" @if(isset($teacher) && $course_type->id == $subject->course_type) selected="selected" @endif>{{$course_type->title}}</option>
        @endforeach
    </select>
</div>
<!-- teacher Field -->
<div class="form-group col-sm-6">
    {!! Form::label('teacher', 'Teacher:') !!}

    <select name="course_teacher_id" id="course_teacher_id" class = "form-control" required>
    @if(isset($teacher))
        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
    @endif
    </select>
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_featured', 'Is Featured:') !!}
    {!! Form::checkbox('is_featured', null,(isset($subject) && $subject->is_featured == 1 ? true : null) ,[]) !!}
    {{--<input name="is_featured" type="checkbox" id="is_featured" @if(isset($subject)) @if($subject->is_featured == 1) checked @endif @endif>--}}
</div>

<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('details', 'Details:') !!}
    {{--{!! Form::text('details', null, ['class' => 'form-control']) !!}--}}
    <textarea name="details" id="details" rows="10" cols="60"
              class="form-control"  placeholder="Subject Details Goes Here" name="details">
        {{isset($subject) ? $subject->details : ''}}
    </textarea>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.subjects.index') !!}" class="btn btn-default">Cancel</a>
</div>
