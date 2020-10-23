@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Topic
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Error!</strong> please provide below form fields.<br><br>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('chapter_id'))
                    <div class="alert alert-danger">
                        {{ Session::get('chapter_id') }}
                    </div>
                @endif
                @if(Session::has('title'))
                        <div class="alert alert-danger">
                            {{ Session::get('title') }}
                        </div>
                @endif
                @if(Session::has('video_urls'))
                        <div class="alert alert-danger">
                            {{ Session::get('video_urls') }}
                        </div>
                @endif
                <div class="row">
                    {!! Form::open(['route' => 'admin.topics.store', 'files' => true]) !!}

                        @include('admin.topics.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
