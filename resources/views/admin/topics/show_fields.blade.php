<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                @if($topic->topic_video != "")
                    <iframe width="87%" height="500" poster="" src="{{$topic->topic_video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @else
                    <p class="label label-primary">Video Not Available</p>
                @endif

            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <h1>{!! $topic->title !!} </h1>
            <p><label>Status:</label>  {!! $topic->status !!}</p>
            <p><label>Created Date:</label>  {!! $topic->created_at !!}</p>
            <p><label>Updated Date:</label>  {!! $topic->updated_at !!}</p>
            <p><label>Details:</label>  {!! $topic->details !!}</p>

        </div>

    </div>

</div>


