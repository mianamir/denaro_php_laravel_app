@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Topic
        </h1>

    </section>
    <div class="content">
        <a href="{!! route('admin.topics.index') !!}" class="btn btn-default">Back</a>

        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                    {{--@include('admin.topics.show_fields')--}}
                    <p>Title: {{$topic->title}}</p>
                    <p>Details: {{$topic->details}}</p>
                    <hr>
                    <table class="table table-responsive" id="topics-table">
                        <thead>
                        <th>Video</th>
                        <th>Status</th>

                        <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                        @foreach($topic->topic_videos as $topic_video)
                            <tr>

                                <td>
                                    <video width="320" height="240" controls>
                                        <source src="{{asset("topic_videos/" . $topic_video->video_url)}}" type="video/mp4">
                                        <source src="{{ $topic_video->video_url }}" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>

                                    {{--<video id='my-video' class='video-js' controls preload='auto' width='320' height='240'--}}
                                           {{--poster='' data-setup='{}'>--}}
                                        {{--<source src='{{asset("topic_videos/" . $topic_video->video_url)}}' type='video/mp4'>--}}
                                        {{--<source src='{{asset("topic_videos/" . $topic_video->video_url)}}' type='video/webm'>--}}
                                        {{--<source src='{{asset("topic_videos/" . $topic_video->video_url)}}' type='video/ogg'>--}}
                                        {{--<p class='vjs-no-js'>--}}
                                            {{--To view this video please enable JavaScript, and consider upgrading to a web browser that--}}
                                            {{--<a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>--}}
                                        {{--</p>--}}
                                    {{--</video>--}}


                                </td>
                                <td>
                                    @if($topic_video->status == "active")
                                        <span class="label label-primary">Active</span>
                                    @elseif($topic_video->status == "inactive")
                                        <span class="label label-warning">In Active</span>
                                    @else
                                        <span class="label label-danger">Not Available</span>
                                    @endif
                                </td>

                                <td>
                                    {!! Form::open(['route' => ['admin.topics.destroy', $topic->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>
                                        {{--<a href="{!! route('admin.topics.show', [$topic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                        <a href="{!! route('admin.topics.edit', [$topic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <hr>

                    <a href="{!! route('admin.topics.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
