@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Social Icon
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.social_icons.show_fields')
                    <a href="{!! route('admin.socialIcons.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
