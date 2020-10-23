<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>{!! $teacher->name !!} {!! $teacher->fathername !!} (Code: {!! $teacher->teacher_code !!})</h1>
            <!-- Profile Pic Field -->
            <div class="form-group">

                <p><img src="{{asset('teachers/'.$teacher->profile_pic )}}" width="200" height="200" ></p>
            </div>

            <p><label>Contacts:</label> {!! $teacher->contact1 !!} | {!! $teacher->contact2 !!}</p>
            <p><label>Email:</label>  {!! $teacher->email !!}</p>
            <p><label>Qualification:</label>  {!! $teacher->qualificatioon !!}</p>
            <p><label>Course to Teach:</label>  {!! $teacher->course_to_teach->title !!}</p>
            <p><label>Experience:</label>  {!! $teacher->experience !!}</p>
            <p><label>Username:</label>  {!! $teacher->username !!}</p>
            <p><label>Password:</label>  {!! $teacher->password2 !!}</p>
            <p><label>Country:</label>  {!! $teacher->country !!}</p>
            <p><label>City:</label>  {!! $teacher->city !!}</p>
            <p><label>CNIC:</label>  {!! $teacher->cnic !!}</p>
            <p><label>Status:</label>  {!! $teacher->status !!}</p>
            @if($teacher->payment_plan_id != null)
            <p><label>Payment Plan:</label> Rs. {!! $teacher->payment_plan->price !!}/{!! $teacher->payment_plan->duration !!}</p>
            @else
            <p><label>Payment Plan:</label>  Not Available</p>
            @endif
            <p><label>Joining Date:</label>  {!! $teacher->created_at !!}</p>


        </div>
    </div>

</div>