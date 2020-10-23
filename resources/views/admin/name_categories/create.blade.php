@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Name Category
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.nameCategories.store']) !!}

                        @include('admin.name_categories.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
