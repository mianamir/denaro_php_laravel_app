@extends('frontend.layouts.denaro')

@section('content')
    <img src="{{$content->image}}"/>
    <br/>
    <div class="">
        <section class="pad20-45-top-bottom get_in_02">
            <div class="container" align="center">
                <div class="row">
                    <h2>{{$content->title}}</h2>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact-info-column text-center">
                            <img src="{{asset('assets/images/contact-address-icon.png')}}" alt="address-icon">
                            <h4>Location</h4>
                            <p class="fnt-17">{{$contact->address}}</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  contact-info-column text-center">
                            <img src="{{asset('assets/images/contact-phn-icon.png')}}" alt="phone-icon">
                            <h4>Phone</h4>
                            <p class="fnt-17 text-center">{{$contact->phone1}}</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  contact-info-column text-center">
                            <img src="{{asset('assets/images/contact-msg-icon.png')}}" alt="message-icon">
                            <h4>Email</h4>
                            <p class="fnt-17">{{$contact->email}}</p>
                        </div>
                    </div>
                    <div class="row text-center">
                        <h3 class="mar-btm30">Leave us your info</h3>
                       <div class="col-md-6">
                            <form action="{{route('email-send')}}" method="post", enctype="multipart/form-data">
                           <div class="contact-form">
                               <div class="col-md-6 form-field input-halfrght">
                                   <input name="fullname" type="text" class="form-input" placeholder="Full Name*">
                               </div>
                               <div class="col-md-6 form-field input-halflft">
                                   <input name="email" type="email" class="form-input" placeholder="Email*">
                               </div>
                               <div class="col-lg-12 col-md-12 form-field">
                                   <input name="website" type="text" class="form-input" placeholder="Website*">
                               </div>
                               <div class="col-lg-12 col-md-12 form-field">
                                   <textarea name="comment" cols="1" rows="2" class="form-comment" placeholder="Comment*"></textarea>
                               </div>
                               <div class="col-md-12 form-field no-margin">
                                   <input name="name" type="button" class="form-submit-btn" value="Submit Now">
                               </div>
                           </div>
                            </form>
                       </div>
                        <div class="col-md-6">
                            {!! $contact->fax !!}
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <div class="clearfix">&nbsp;</div>






@endsection
