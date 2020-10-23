
<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('topic_video', 'Topic Video:') !!}
    {!! Form::text('topic_video', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <select name="status" class = "form-control" required>
        <option value="active" {{isset($topic) && $topic->status == "active" ?"selected":''}}>Active</option>
        <option value="inactive" {{isset($topic) && $topic->status == "inactive" ?"selected":''}}>In Active</option>

    </select>
</div>

<!-- Details Field -->
<div class="form-group col-sm-12">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.topics.index', isset($chapter) ? $chapter->id : "") !!}" class="btn btn-default">Cancel</a>
</div>
