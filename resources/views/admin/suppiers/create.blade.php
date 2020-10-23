@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Supplier
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <form action="{{route('admin.suppiers.store')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                        @if(Session::has('name'))
                            <div class="alert alert-danger">
                                {{ Session::get('name') }}
                            </div>
                        @endif
                        @if(Session::has('email'))
                            <div class="alert alert-danger">
                                {{ Session::get('email') }}
                            </div>
                        @endif
                        @if(Session::has('phone'))
                            <div class="alert alert-danger">
                                {{ Session::get('phone') }}
                            </div>
                        @endif
                        @if(Session::has('address'))
                            <div class="alert alert-danger">
                                {{ Session::get('address') }}
                            </div>
                        @endif
                        @if(Session::has('city'))
                            <div class="alert alert-danger">
                                {{ Session::get('city') }}
                            </div>
                        @endif
                        @if(Session::has('country'))
                            <div class="alert alert-danger">
                                {{ Session::get('country') }}
                            </div>
                        @endif
                        @if(Session::has('image'))
                            <div class="alert alert-danger">
                                {{ Session::get('image') }}
                            </div>
                        @endif


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input id="" name="name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input id="" name="email" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input id="" name="phone" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input id="" name="address" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input id="" name="city" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                <input id="" name="country" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>

                                <input id="" name="image" type="file" class="form-control">
                            </div>
                        </div>

                        {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                                {{--<label>Select Status</label><br>--}}
                                {{--<select class="form-control" name="status">--}}

                                    {{--<option value="-1">Select Status</option>--}}
                                    {{--<option value="Active"--}}
                                            {{--{{isset($suppier) && $suppier->status == "Active" ?"selected":''}}>Active</option>--}}
                                    {{--<option value="Pending"--}}
                                            {{--{{isset($suppier) && $suppier->status == "Pending" ?"selected":''}}>Pending</option>--}}
                                    {{--<option value="Pending"--}}
                                            {{--{{isset($suppier) && $suppier->status == "Deleted" ?"selected":''}}>Deleted</option>--}}


                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="" value="Save" class="btn btn-primary">
                                <a href="{{route('admin.suppiers.index')}}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
