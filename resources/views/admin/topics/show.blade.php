@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            {!! isset($chapter) ? $chapter->title : "Not Available" !!} / topic
        </h1>

    </section>
    <div class="content">
        <a href="{!! route('admin.topics.index',isset($chapter) ? $chapter->id : "" ) !!}" class="btn btn-default">Back</a>

        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                    @include('admin.topics.show_fields')
                    </div>
            </div>
        </div>
    </div>
@endsection
