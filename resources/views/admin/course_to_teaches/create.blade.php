@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Course To Teach
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.courseToTeaches.store']) !!}

                        @include('admin.course_to_teaches.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
