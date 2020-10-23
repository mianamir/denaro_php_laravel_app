@extends('frontend.layouts.virtual_school')
@section('content')

    <!-- PROFILE FEATURE -->
    <section class="profile-feature">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="info-author">
                <div class="image">
                    <img src="{{asset('teachers/'.$teacher->profile_pic)}}" alt="">
                </div>
                <div class="name-author">
                    <h2 class="big">{{$teacher->name}}</h2>
                </div>
                <div class="address-author">
                    <i class="fa fa-map-marker"></i>
                    <h3>{{$teacher->city}}, {{$teacher->country}}</h3>
                </div>
            </div>
            <div class="info-follow">
                {{--<div class="trophies">--}}
                    {{--<span>12</span>--}}
                    {{--<p>Trophies</p>--}}
                {{--</div>--}}
                {{--<div class="trophies">--}}
                    {{--<span>12</span>--}}
                    {{--<p>Follower</p>--}}
                {{--</div>--}}
                {{--<div class="trophies">--}}
                    {{--<span>20</span>--}}
                    {{--<p>Following</p>--}}
                {{--</div>--}}
                <div class="trophies">
                    <span>$ 149,902</span>
                    <p>Balance</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END / PROFILE FEATURE -->

    <!-- CONTEN BAR -->
    @include('frontend.site.includes.teacher-content-bar')
    <!-- END / CONTENT BAR -->



    <!-- COURSE CONCERN -->
    <section id="course-concern" class="course-concern">
        <div class="container">

            <div class="price-course">
                <i class="icon md-database"></i>
                <h3>{{$chapter->title}} / topics</h3>

            </div>
            <div class="create-coures">
                <a href="{{route('get.frontend.topic.new', ['id' => $chapter->id])}}" class="mc-btn btn-style-1">New topic +</a>
            </div>
            <div class="row">

            @if(Session::has('topic_saved_flash_message'))
                <div class="alert alert-info">
                    {{ Session::get('topic_saved_flash_message') }}
                </div>
            @endif

            @if(Session::has('topic_deleted_flash_message'))
                <div class="alert alert-info">
                    {{ Session::get('topic_deleted_flash_message') }}
                </div>
            @endif

            @if(Session::has('topic_not_deleted_flash_message'))
                <div class="alert alert-danger">
                    {{ Session::get('topic_not_deleted_flash_message') }}
                </div>
            @endif

                <div class="col-md-12">

                    <table class="table table-responsive table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Last Modified</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($topics as $topic)
                        <tr>
                            <td>{!! $topic->title !!}</td>
                            <td>
                                @if($topic->status == "active")
                                    <span class="label label-primary">Active</span>
                                @elseif($topic->status == "inactive")
                                    <span class="label label-warning">In Active</span>
                                @else
                                    <span class="label label-danger">Not Available</span>
                                @endif
                            </td>
                            <td>{!! $topic->created_at !!}</td>
                            <td>{!! $topic->updated_at !!}</td>
                            <td>
                                {!! Form::open(['route' => ['frontend.topic.destroy', $topic->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('get.frontend.topic.show', [$topic->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                                    <a href="{!! route('get.frontend.topic.edit', [$topic->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('get.frontend.chapters', ['id' => $chapter->subject->id])}}" class="mc-btn btn-style-1">Back</a>

                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
@endsection
