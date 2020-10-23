@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Teacher
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.teachers.store','files' => true]) !!}

                        @include('admin.teachers.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
