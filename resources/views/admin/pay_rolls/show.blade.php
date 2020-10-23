@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Pay Roll
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.pay_rolls.show_fields')
                    <a href="{!! route('admin.payRolls.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
