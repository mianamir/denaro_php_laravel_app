@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Add Brand
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">

                    <form action="{{route('admin.brands.store')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-md-6">
                           <div class="form-group">
                               <input type="file" name="file" class="form-control"/>
                           </div>
                       </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php
                                $brandTypes = \App\Models\Admin\BrandType::all();
                                ?>
                                <select name="type" class="form-control">
                                    <option>Select Brand Type</option>
                                    @foreach($brandTypes as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <input type="submit" class="btn btn-primary" value="Save">
                                 <a href="{{route('admin.brands.index')}}" class="btn btn-default">Cancel</a>
                             </div>
                         </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
