@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Customer
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <div class="col-md-12">
                        <a href="{!! route('admin.customers.index') !!}" class="btn btn-default">Back</a>
                        <br/><br/>
                        <div class="row" style="padding-left: 20px">


                            <div class="col-md-6">
                                <p>Name: {{$customer->name}}</p>
                                <p>Email: {{$customer->email}}</p>
                                <p>Phone: {{$customer->phone}}</p>
                                <?php
                                $country = \App\Models\Admin\Gallery::where('id',$customer->c_id)->first();
                                ?>
                                <p>Country: {{$country->name}}</p>
                                <p>Date: {{$customer->created_at}}</p>
                                @if($customer->status == 'Active')
                                    <p>Status: Active</p>
                                @else
                                    <p>Status: Pending</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                {{--<p><img src="{{asset($customer->image)}}" style="width: 400px; height: 300px"></p>--}}
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
@endsection
