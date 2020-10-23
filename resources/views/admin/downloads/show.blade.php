@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Download
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.downloads.show_fields')
                    <a href="{!! route('admin.downloads.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
