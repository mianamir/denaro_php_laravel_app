@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Customer
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    @if(Session::has('flash_message'))
                        <div class="alert alert-danger">
                            {{ Session::get('flash_message') }}
                        </div>
                    @endif
                    @if(Session::has('registered'))
                        <div class="alert alert-success">
                            {{ Session::get('registered') }}
                        </div>
                    @endif
                    @if(Session::has('country'))
                        <div class="alert alert-danger">
                            {{ Session::get('country') }}
                        </div>
                    @endif

                    @if(Session::has('password1'))
                        <div class="alert alert-danger">
                            {{ Session::get('password1') }}
                        </div>
                    @endif
                    @if(Session::has('password2'))
                        <div class="alert alert-danger">
                            {{ Session::get('password2') }}
                        </div>
                    @endif
                    @if(Session::has('confirm'))
                        <div class="alert alert-danger">
                            {{ Session::get('confirm') }}
                        </div>
                    @endif

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
                    <form action="{{route('admin.customers.store')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input id="" name="name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Designation</label>
                                <input id="" name="email" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Image</label>
                                <input id="" name="image" type="file" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="" value="Save" class="btn btn-primary">
                                <a href="{{route('admin.customers.index')}}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
