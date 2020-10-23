@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Certification
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.certifications.store']) !!}

                        @include('admin.certifications.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
