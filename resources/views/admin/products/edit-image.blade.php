@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Product
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">

                    <form action="{{route('admin.products.update.image', [$image->id])}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        @if(Session::has('des_img'))
                            <div class="alert alert-danger">
                                {{ Session::get('des_img') }}
                            </div>
                        @endif

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Detail Image</label><br>
                                <p><img src="{{asset($image->image)}}" width="100" height="100"></p>
                            </div>
                        </div>
                        <br>
                        <p>or upload new image</p>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Detail Image</label><br>
                                <input type="file" name="image" class="">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="" value="Update" class="btn btn-primary">
                                <a href="{{route('admin.products.show',[$image->p_id])}}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </form>
                    <script>
                        CKEDITOR.replace( 'detail' );
                    </script>


                </div>
            </div>
        </div>
    </div>
@endsection
