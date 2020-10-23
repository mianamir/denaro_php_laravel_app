@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Product
        </h1>
    </section>

    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <a href="{!! route('admin.products.index') !!}" class="btn btn-default">Back</a>
                <br/><br/>
                <div class="row" style="padding-left: 20px">
                    <div class="col-md-6">
                    <p>Ref. No: {{$product->ref_no}}</p>
                    <p>Chassis No: {{$product->chassis_type}}</p>
                    <p>Price: {{$product->price}}</p>
                    <p>Make: {{$product->make}}</p>
                    <p>Model: {{$product->model}}</p>
                    <p>Version: {{$product->version}}</p>
                    <p>Version: {{$product->year}}</p>
                    <p>Color Exterior: {{$product->color_ext}}</p>
                    <p>Color Interior: {{$product->color_int}}</p>
                    <p>Car Type: {{$product->car_type}}</p>
                    <p>Engine CC: {{$product->engine_cc}}</p>
                    <p>Transmission: {{$product->transmission}}</p>

                    <p>Doors: {{$product->doors}}</p>
                    <p>Seats: {{$product->seats}}</p>
                    <p>Mileages: {{$product->mileages}}</p>
                    <p>Registration/Import: {{$product->registration_import}}</p>
                    <p>Availability: {{$product->availability}}</p>
                    @if($product->is_fresh_arrival == 1)
                        <p>Fresh Arrival: Yes</p>
                    @else
                        <p>Fresh Arrival: No</p>
                    @endif
                    @if($product->is_featured_stock == 1)
                        <p>Featured Stock: Yes</p>
                    @else
                        <p>Featured Stock: No</p>
                    @endif

                    </div>
                    <div class="col-md-6">
                        @if($product->image != null)
                            <p>Image: <img src="{{asset($product->image)}}" width="100" height="100"></p>
                        @else
                            <p style="font-weight: bold">Auction Sheet Not Available</p>
                        @endif
                    </div>
                </div>

                    <hr/>
                    <h2 style="text-align: center">Product Images</h2>
                    <?php $images = \App\Models\Admin\ProductImage::where('p_id',$product->id)->get(); ?>
                    <table class="table table-responsive" id="myTable">
                        <thead>
                        <th>Image</th>
                        <th colspan="3">Actions</th>
                        </thead>
                        <tbody>
                        @foreach($images as $image)
                            <tr>
                                <td><img src="{{asset($image->image)}}" width="150" height="150"></td>
                                
                                <td>
                                    {!! Form::open(['route' => ['admin.products.destroy.image', $image->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>
                                        {{--<a href="{!! route('admin.products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                        <a href="{!! route('admin.products.edit.image', [$image->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <a href="{!! route('admin.products.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
