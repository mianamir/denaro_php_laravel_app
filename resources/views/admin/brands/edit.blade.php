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

                    <form action="{{route('admin.brands.update',['id'=>$brand->id])}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-md-12">
                           <div class="form-group">
                               <br>
                               <image src="{{asset($brand->image)}}" height="100" width="100"/>
                               <p>Or choose new file</p>
                               <input type="file" name="file" class="form-control"/>
                           </div>
                       </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php
                                $brandTypes = \App\Models\Admin\BrandType::all();
                                ?>
                                <select name="type" class="form-control">
                                    <option>Select Brand Type</option>
                                    @foreach($brandTypes as $type)
                                        <option value="{{$type->id}}"
                                        @if($type->id == $brand->brand_type_id) selected="selected" @endif>{{$type->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <br>
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
