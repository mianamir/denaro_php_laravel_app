<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                @if($subject->promo_video != "")
                    <iframe width="87%" height="500" poster="{{asset('subjects/' . $subject->image)}}" src="{{$subject->promo_video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @else
                    <p class="label label-primary">Video Not Available</p>
                @endif

            </div>
        </div>



    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                @if($subject->image != null)
                    <image src="{{asset('subjects/'. $subject->image)}}" width="320" height="240"/>
                @else
                    <p class="label label-primary">Image Not Available</p>
                @endif

            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                @if($subject->promo_video_featured_image != null)
                    <image src="{{asset('subjects/'. $subject->promo_video_featured_image)}}" width="320" height="240"/>
                @else
                    <p class="label label-primary">Image Not Available</p>
                @endif

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h1>{!! $subject->title !!} </h1>
            <p><label>Short Details:</label> {!! $subject->short_details !!} </p>
            <p><label>Code:</label> #C-{!! $subject->code !!} </p>
            <p><label>Study Group:</label>  {{ $subject->subject_type_id != null && isset($subject->subject_type) ? $subject->subject_type->title : 'Not Available' }}</p>
            <p><label>Type:</label>  {{ $subject->course_type != -1 && isset($subject->course_type) ? $subject->course_to_teach->title : 'Not Available' }}</p>
            <p><label>Class:</label>  {{ $subject->class_id != null && isset($subject->student_class) ? $subject->student_class->title : 'Not Available' }}</p>
            <p><label>Is Featured:</label>  {{ $subject->is_featured == 1 ? 'Yes' : 'No' }}</p>
            <p><label>Status:</label>  {!! $subject->status !!}</p>
            <p><label>Created Date:</label>  {!! $subject->created_at !!}</p>
            <p><label>Updated Date:</label>  {!! $subject->updated_at !!}</p>
            <p><label>Details:</label>  {!! $subject->details !!}</p>

        </div>

    </div>

</div>