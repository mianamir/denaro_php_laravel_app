@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Sub Category
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.subCategories.store','files'=>true]) !!}

                        @include('admin.sub_categories.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
