@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Location
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.locations.show_fields')
                    <a href="{!! route('admin.locations.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
