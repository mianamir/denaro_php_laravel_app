@extends('frontend.layouts.virtual_school')
@section('title')
    {!!$content->title!!}
@endsection
@section('keywords')
    {!!$content->met_keywords!!}
@endsection
@section('description')
    {!!$content->meta_description!!}
@endsection
<?php
$contact1 = \App\Models\Admin\Contact::where('id', 9)->first();

?>
@section('content')
    <img src="{{$content->image}}"/>

<div class="container">
    <h1>{{$content->title}}</h1>

    <div class="row">
    <div class="col-md-6">
        <form class="form" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Message</label>
                {{--<input type="text" name="message" class="form-control"/>--}}
                <textarea name="message" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Get Free Consulation" class="btn btn-primary btn-style-3"/>

            </div>
        </form>

    </div>
    <div class="col-md-6">
        <br>
        <address>
            <p style="font-size: 20px; font-weight: bold; color: #000;"><i class="icon md-email"></i>: {{$contact1->email}}</p><br>
            <p style="font-size: 20px; font-weight: bold; color: #000;"><i class="fa fa-mobile"></i>: {{$contact1->phone1}}</p><br>
            <p style="font-size: 20px; font-weight: bold; color: #000;"><i class="fa fa-map-marker"></i>: {{$contact1->address}}</p>

        </address>


        </div>

    </div> <!--row ends-->

</div>

<div class="row">

        <div class="col-md-12">
            {!! $contact1->fax !!}

        </div>

    </div> <!--row ends-->



@endsection
