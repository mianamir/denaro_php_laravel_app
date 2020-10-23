@extends('frontend.layouts.denaro')

@section('content')

    <br>
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                {{--<div class="panel-heading">{{ trans('labels.frontend.auth.login_box_title') }}</div>--}}
                <h3 style="text-align: center; margin-top: 55px;">Danaro Admin Login</h3>
                <div class="panel-body">

                    {{ Form::open(['route' => 'auth.login', 'class' => 'form-horizontal']) }}

                    <div class="form-group">
                        {{ Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{ Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        {{ Form::label('password', trans('validation.attributes.frontend.password'), ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{ Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    @if (isset($captcha) && $captcha)
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::captcha() !!}
                                {{ Form::hidden('captcha_status', 'true') }}
                            </div><!--col-md-6-->
                        </div><!--form-group-->
                    @endif

                    {{--<div class="form-group">--}}
                    {{--<div class="col-md-6 col-md-offset-4">--}}
                    {{--<div class="checkbox">--}}
                    {{--<label>--}}
                    {{--{{ Form::checkbox('remember') }} {{ trans('labels.frontend.auth.remember_me') }}--}}
                    {{--</label>--}}
                    {{--</div>--}}
                    {{--</div><!--col-md-6-->--}}
                    {{--</div><!--form-group-->--}}

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {{ Form::submit(trans('labels.frontend.auth.login_button'), ['class' => 'btn btn-primary', 'style' => 'margin-right:15px']) }}
                            <a href="{{url('/')}}" class="btn btn-primary">Cancel</a>
                            {{--{{ link_to('password/reset', trans('labels.frontend.passwords.forgot_password')) }}--}}
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    {{ Form::close() }}

                    <div class="row text-center">
                        {!! $socialite_links !!}
                    </div>
                </div><!-- panel body -->

            </div><!-- panel -->

        </div><!-- col-md-8 -->

    </div><!-- row -->



@endsection

@section('after-scripts-end')
    @if (isset($captcha) && $captcha)
        {!! Captcha::script() !!}
    @endif
@stop