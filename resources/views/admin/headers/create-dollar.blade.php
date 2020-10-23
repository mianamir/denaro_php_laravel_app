@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Header
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <form action="{{route('admin.headers.dollar', [$dollar->id])}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{--<input type="hidden" name="dollar_id" value="{{ $dollar->id }}">--}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Dollar Rate </label>
                                <input type="text" name="dollar" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="" value="Save" class="btn btn-primary">
                                <a href="{{route('admin.headers.index.rate')}}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
