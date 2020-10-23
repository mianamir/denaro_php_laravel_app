@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Client Review
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">admin2.layouts.master
                <div class="row">
                    {!! Form::open(['route' => 'admin.clientReviews.store', 'files' => true]) !!}

                        @include('admin.client_reviews.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
