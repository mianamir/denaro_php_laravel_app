@extends('admin2.layouts.master')
@section('content')
    <section class="content-header">
        <h1>
            Social Icon
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.socialIcons.store']) !!}

                        @include('admin.social_icons.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
