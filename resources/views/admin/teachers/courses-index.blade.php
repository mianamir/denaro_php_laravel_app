@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">{{$teacher->name}} courses ({{$teacher->courses->count()}})</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.teachers.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    {{--@include('admin.teachers.table')--}}
                <table class="table table-responsive" id="subjects-table">
                    <thead>
                    <th>Image</th>
                    <th>Video Featured Image</th>
                    <th>Title</th>
                    <th>#Code</th>
                    <th>Price</th>
                    <th>Is Featured</th>
                    <th>Status</th>
                    {{--<th>Created Date</th>--}}
                    {{--<th>Last Updated</th>--}}
                    <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                    @foreach($subjects as $subject)
                        <tr>
                            <td>
                                @if($subject->image != null)
                                    <image src="{{asset('subjects/'. $subject->image)}}" width="100" height="100"/>
                                @else
                                    <p class="label label-primary">Image Not Available</p>
                                @endif

                            </td>
                            <td>
                                @if($subject->promo_video_featured_image != null)
                                    <image src="{{asset('subjects/'.$subject->promo_video_featured_image)}}" width="100" height="100"/>
                                @else
                                    <p class="label label-primary">Image Not Available</p>
                                @endif

                            </td>

                            <td>{!! $subject->title !!}</td>
                            <td>C-{!! $subject->code !!}</td>


                            <td>{!! $subject->price !!}</td>
                            <td>
                                @if($subject->is_featured == 1)
                                    <span class="label label-info">Yes</span>
                                @else
                                    <span class="label label-warning">No</span>
                                @endif
                            </td>
                            <td>
                                @if($subject->status == "active")
                                    <span class="label label-primary">Active</span>
                                @elseif($subject->status == "inactive")
                                    <span class="label label-warning">In Active</span>
                                @else
                                    <span class="label label-danger">Not Available</span>
                                @endif
                            </td>
                            {{--<td>{!! $subject->created_at !!}</td>--}}
                            {{--<td>{!! $subject->updated_at !!}</td>--}}


                            <td>
                                {{--{!! Form::open(['route' => ['admin.subjects.destroy', $subject->id], 'method' => 'delete']) !!}--}}
                                <div class='btn-group'>
                                    <a href="{!! route('admin.subjects.show', [$subject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="{!! route('admin.subjects.edit', [$subject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

