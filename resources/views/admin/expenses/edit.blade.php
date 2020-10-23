@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Expense
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">

                    <form action="{{route('admin.expenses.update',['id'=>$expense->id])}}" method="post" enctype="multipart/form-data">
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
                        @if(Session::has('type'))
                            <div class="alert alert-danger">
                                {{ Session::get('type') }}
                            </div>
                        @endif
                        @if(Session::has('amount'))
                            <div class="alert alert-danger">
                                {{ Session::get('amount') }}
                            </div>
                        @endif
                        {{--@if(Session::has('product_id'))--}}
                            {{--<div class="alert alert-danger">--}}
                                {{--{{ Session::get('product_id') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        {{--@if(Session::has('supplier_id'))--}}
                            {{--<div class="alert alert-danger">--}}
                                {{--{{ Session::get('supplier_id') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        {{--@if(Session::has('employee_id'))--}}
                            {{--<div class="alert alert-danger">--}}
                                {{--{{ Session::get('employee_id') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input id="" name="name"
                                       value="{{old('name', $expense->name)}}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Details</label>
                                <input id="" name="details"
                                       value="{{old('details', $expense->details)}}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Supplier</label><br>
                                <?php
                                $suppliers = \App\Models\Admin\Suppier::all();
                                ?>
                                <select class="form-control" name="supplier_id">

                                    <option value="-1">Select Supplier</option>
                                    @foreach( $suppliers as $s)
                                        <option value="{{$s->id}}"
                                                {{isset($s) && $s->id == $expense->supplier_id ?"selected":''}}>{{$s->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Product</label><br>
                                <?php
                                $products = \App\Models\Admin\Product::all();
                                ?>
                                <select class="form-control" name="product_id">

                                    <option value="-1">Select Product</option>
                                    @foreach( $products as $p)
                                        <option value="{{$p->id}}"
                                                {{isset($p) && $p->id == $expense->product_id ?"selected":''}}>{{$p->make}}</option>
                                    @endforeach


                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Employee</label><br>
                                <?php
                                $employees = \App\Models\Admin\Employee::all();
                                ?>
                                <select class="form-control" name="employee_id">

                                    <option value="-1">Select Employee</option>
                                    @foreach( $employees as $e)
                                        <option value="{{$e->id}}"
                                                {{isset($e) && $e->id == $expense->employee_id ?"selected":''}}>{{$e->name}}</option>
                                    @endforeach


                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Type</label><br>
                                <select class="form-control" name="type">

                                    <option value="-1">Select Type</option>
                                    <option value="Product"
                                            {{isset($expense) && $expense->type == "Product" ?"selected":''}}>Product</option>
                                    <option value="Supplier"
                                            {{isset($expense) && $expense->type == "Supplier" ?"selected":''}}>Supplier</option>
                                    <option value="Employee"
                                            {{isset($expense) && $expense->status == "Employee" ?"selected":''}}>Employee</option>
                                    <option value="Other"
                                            {{isset($expense) && $expense->status == "Other" ?"selected":''}}>Other</option>


                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Status</label><br>
                                <select class="form-control" name="status">

                                    <option value="-1">Select Status</option>
                                    <option value="Completed"
                                            {{isset($expense) && $expense->status == "Completed" ?"selected":''}}>Completed</option>
                                    <option value="Pending"
                                            {{isset($expense) && $expense->status == "Pending" ?"selected":''}}>Pending</option>
                                    {{--<option value="Pending"--}}
                                            {{--{{isset($purchase) && $purchase->status == "Deleted" ?"selected":''}}>Deleted</option>--}}


                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Amount</label>
                                <input id="" name="amount"
                                       value="{{old('amount', $expense->amount)}}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="" value="Update" class="btn btn-primary">
                                <a href="{{route('admin.expenses.index')}}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
