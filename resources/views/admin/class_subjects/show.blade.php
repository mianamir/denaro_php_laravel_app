@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Class Subject
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.class_subjects.show_fields')
                    <a href="{!! route('admin.classSubjects.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
