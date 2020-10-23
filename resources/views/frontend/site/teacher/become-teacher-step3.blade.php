@extends('frontend.layouts.virtual_school')

@section('content')


    <!-- FEATURED REQUEST TEACHER -->
    <section id="featured-request-teacher" class="featured-request-teacher">
        <div class="awe-parallax bg-featured-request-teacher"></div>
        <div class="awe-overlay overlay-color-1"></div>
        <div class="container">
            <div class="row">
                <h1 class="big">To activate your account?</h1>

                <div class="row">
                    <!-- FEATURED ITEM -->
                    <div class="col-md-6">
                        <div class="featured-item">
                            <i class=""></i>
                            <h4 class="title-box text-uppercase">Your Teaching Account Details</h4>
                            <p><label>Name:</label> {!! $teacher->name !!} (Code: {!! $teacher->teacher_code !!})</p>
                            <p><label>Username:</label>  {!! $teacher->username !!}</p>
                            <p><label>Password:</label>  {!! $teacher->password2 !!}</p>
                            <p><label>Status:</label>  {!! $teacher->status !!}</p>
                            @if($teacher->payment_plan_id != null)
                                <p><label>Payment Plan:</label> Rs. {!! $teacher->payment_plan->price !!}/{!! $teacher->payment_plan->duration !!}</p>
                            @else
                                <p><label>Payment Plan:</label>  Not Available</p>
                            @endif


                        </div>
                    </div>
                    <!-- END / FEATURED ITEM -->
                    <!-- FEATURED ITEM -->
                    <div class="col-md-6">
                        <div class="featured-item">
                            <i class=""></i>

                            <h4 class="title-box text-uppercase">Our Account Details</h4>
                            <p>Please pay selected amount and confirm your payment at Whats app: (0333 1458883)</p>
                            <?php
                            $payment_accounts = \App\Models\Admin\PaymentAccount::all();
                            ?>
                            @foreach($payment_accounts as $payment_account)
                                <p>{{$payment_account->name}}  {{$payment_account->type}} | {{$payment_account->account}}</p>
                            @endforeach
                        </div>
                    </div>
                    <!-- END / FEATURED ITEM -->

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        {{--<div class="before-footer-link">--}}
                        {{--@if(\Session::get('user_name') == null)--}}
                        {{--<a href="{{route('become.teacher.step1')}}" class="mc-btn btn-style-2">Become a student</a>--}}
                        <a href="{{route('get.teacher.login')}}" class="mc-btn btn-style-custom">Login Here</a>

                        {{--@endif--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
