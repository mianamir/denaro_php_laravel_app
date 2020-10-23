@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            {!! isset($chapter) ? $chapter->title : "Not Available" !!} / topic
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
                    <form action="{{route('admin.topics.store', $chapter->id)}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @include('admin.topics.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
