@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Client Review
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.client_reviews.show_fields')
                    <a href="{!! route('admin.clientReviews.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
