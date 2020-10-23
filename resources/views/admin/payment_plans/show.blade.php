@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Payment Plan
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.payment_plans.show_fields')
                    <a href="{!! route('admin.paymentPlans.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
