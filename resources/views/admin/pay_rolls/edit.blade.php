@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Pay Roll
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <form action="{{route('admin.payRolls.update',['id'=>$payRoll->id])}}" method="post" enctype="multipart/form-data">
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
                        @if(Session::has('ref_no'))
                            <div class="alert alert-danger">
                                {{ Session::get('ref_no') }}
                            </div>
                        @endif
                        @if(Session::has('employee_id'))
                            <div class="alert alert-danger">
                                {{ Session::get('employee_id') }}
                            </div>
                        @endif
                        @if(Session::has('salary'))
                            <div class="alert alert-danger">
                                {{ Session::get('salary') }}
                            </div>
                        @endif
                        @if(Session::has('employee_id'))
                            <div class="alert alert-danger">
                                {{ Session::get('employee_id') }}
                            </div>
                        @endif
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Supplier</label><br>
                                <?php
                                $employees = \App\Models\Admin\Employee::all();
                                ?>
                                <select class="form-control" name="employee_id">

                                    <option value="-1">Select Employee</option>
                                    @foreach( $employees as $e)
                                        <option value="{{$e->id}}"
                                                {{isset($e) && $e->id == $payRoll->employee_id ?"selected":''}}>{{$e->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Salary</label>
                                <input id="salary" name="salary"
                                       value="{{old('salary', $payRoll->salary)}}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Select Status</label><br>
                                <select class="form-control" name="status">

                                    <option value="-1">Select Status</option>
                                    <option value="Paid"
                                            {{isset($payRoll) && $payRoll->status == "Paid" ?"selected":''}}>Paid</option>
                                    <option value="UnPaid"
                                            {{isset($payRoll) && $payRoll->status == "UnPaid" ?"selected":''}}>UnPaid</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="" value="Update" class="btn btn-primary">
                                <a href="{{route('admin.payRolls.index')}}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
