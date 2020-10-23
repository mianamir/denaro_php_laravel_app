@extends('admin.layouts.master')

@section('title', 'Dashboard')
<style>
    .text-color{
        color: #fff !important;
    }
</style>
@section('content')
    <div class="content-wrapper" style="margin: 0px;">

    <?php
    $adminName = \Auth::user()->name;
    $id1 = \Auth::user()->id;
    $ur = \DB::table('role_user')->where('user_id', $id1)->first();
    $role = \App\Role::find($ur->role_id);

    $u = \App\User::where('isDeleted', 0)->get()->count();
    $m = \App\Media::where('isDeleted', 0)->get()->count();
    $mf = \App\Media::where([
             'isDeleted'=> 0,
             'need_feedback' => 1
         ])->orderBy('id', 'desc')->first();
    $f = \App\Feedback::where('isDeleted', 0)->get()->count();

    // Editor dashboard cards

    $ef = \App\Feedback::where([
        'isDeleted'=> 0,
        'user_id' => $id1
    ])->orderBy('id', 'desc')->get()->count();

    $mfe = \App\Media::where([
        'isDeleted'=> 0,
        'need_feedback' => 1
    ])->orderBy('id', 'desc')->get()->count();

    ?>

    @if($adminName == 'admin')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">

                        @if($u == null)
                            <h3> 0 </h3>
                        @else
                            <h3> {{$u}}  </h3>
                        @endif

                        <a href="{{url('users')}}" class="text-color"><p>View Users</p></a>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{url('users')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        @if($m == null)
                        <h3> 0 </h3>
                        @else
                            <h3> {{$m}}  </h3>
                        @endif
                        <a href="{{url('all-media')}}" class="text-color"><p>View Media</p></a>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{url('all-media')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">

                        @if($f == null)
                            <h3> 0 </h3>
                        @else
                            <h3> {{$f}}  </h3>
                        @endif
                        <a href="{{url('feedbacks')}}" class="text-color"><p>View Feedback</p></a>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a href="{{url('feedbacks')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
             {{--<div class="col-lg-3 col-xs-6">--}}
                {{--<!-- small box -->--}}
                {{--<div class="small-box bg-aqua">--}}
                    {{--<div class="inner">--}}
                        {{--@if($m == null)--}}
                            {{--<h3> 0  </h3>--}}
                        {{--@else--}}
                            {{--<h3>{{$mf->feedback_counter}}</h3>--}}
                        {{--@endif--}}


                        {{--<a href="{{url('all-media')}}" class="text-color"><p>Latest Media Feedbacks</p></a>--}}
                    {{--</div>--}}
                    {{--<div class="icon">--}}
                        {{--<i class="ion ion-clipboard"></i>--}}
                    {{--</div>--}}
                    {{--<a href="{{url('all-media')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- ./col -->
        </div>
        <!-- /.row -->
       
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
    
    
    
    
    @endif
   <!--Editor Dashboard Cards-->
    @if($role->name == 'editor')
        <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                @if($mfe == null)
                                    <h3> 0 </h3>
                                @else
                                    <h3> {{$mfe}}  </h3>
                                @endif
                                <a href="{{url('all-media')}}" class="text-color"><p>Media Required Feedback</p></a>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{url('all-media')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">

                                @if($ef == null)
                                    <h3> 0 </h3>
                                @else
                                    <h3> {{$ef}}  </h3>
                                @endif
                                <a href="{{url('feedbacks')}}" class="text-color"><p>Your Total Feedbacks</p></a>
                            </div>
                            <div class="icon">
                                <i class="ion ion-clipboard"></i>
                            </div>
                            <a href="{{url('feedbacks')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

                <!-- /.row (main row) -->

            </section>
            <!-- /.content -->




        @endif


    </div>


@endsection