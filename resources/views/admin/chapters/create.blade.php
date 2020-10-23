@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            {!! isset($course) ? $course->title : "Not Available" !!} / chapter
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {{--{!! Form::open(['route' => 'admin.chapters.store', 'id' => $course->subject_id]) !!}--}}
                    {{--<input type="hidden" name="subject_id" value="{{$course->subject_id}}">--}}

                        {{--@include('admin.chapters.fields')--}}

                    {{--{!! Form::close() !!}--}}

                    <form action="{{ route('admin.chapters.store', $course->id) }}" method="POST" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @include('admin.chapters.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
