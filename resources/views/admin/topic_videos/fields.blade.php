<!-- Chapter Field -->


<!-- Detail Field -->
<div class="form-group col-sm-12 col-md-6">
    {!! Form::label('video_url', 'Upload video:') !!}
    <input type="file" class="form-control"
           id="video_url" name="video_url" accept="video/*"/>
</div>


<!-- Detail Field -->
<div class="form-group col-sm-12 col-md-6">
    {!! Form::label('featured_image', 'Featured Image:') !!}
    <input type="file" class="form-control"
           id="featured_image" name="featured_image" accept="image/*"/>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <select name="status" class = "form-control">
        {{--<option value="-1">Select Status</option>--}}
        <option value="active">Active</option>
        <option value="inactive">In Active</option>

    </select>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.topics.index') !!}" class="btn btn-default">Cancel</a>
</div>
