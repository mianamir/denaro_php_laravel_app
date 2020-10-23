@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Video Gallery
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.authors.store']) !!}

                        @include('admin.authors.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
