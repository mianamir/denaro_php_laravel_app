@extends('backend.layouts.master')
@section('content')
    <section class="content-header">
        <h1>
            Map
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.maps.store','files' => true ]) !!}

                        @include('admin.maps.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
