@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Brands</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.brands.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive">
                    <thead>
                    <th>Brand mage</th>
                    <th>Brand Type</th>
                    <th colspan="3">Actions</th>
                    </thead>
                    <tbody>
                    @foreach($brands as $brand)
                        <tr>

                            <td><image src="{{asset($brand->image)}}" width="100" height="100"/></td>
                            <?php
                            $types = \App\Models\Admin\BrandType::all();
                            ?>
                            @foreach($types as $type)
                            @if($type->id == $brand->brand_type_id)
                            <td>{{$type->name}}</td>
                            @endif
                            @endforeach
                            <td>
                                {!! Form::open(['route' => ['admin.brands.destroy', $brand->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    {{--<a href="{!! route('admin.products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                    <a href="{!! route('admin.brands.edit', [$brand->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
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

