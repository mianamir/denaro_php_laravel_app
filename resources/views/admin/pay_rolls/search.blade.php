@extends('admin2.layouts.master')

@section('content')
    <div class="row">
        <form class="form-inline" action="{{route('admin.payRolls.search')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group mx-sm-6 mb-2" style="width: 40% !important; margin-left: 60px;">
                <input type="date" class="form-control" id="from" name="from" placeholder="From Date" style="width: 95% !important;">
            </div>
            <div class="form-group mx-sm-6 mb-2" style="width: 40% !important;">
                <input type="date" class="form-control" id="to" name="to" placeholder="To Date" style="width: 95% !important;">
            </div>

            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <hr  style="border-bottom: solid 1px #3c8dbc;">
    <section class="content-header">
        <h1 class="pull-left">Pay Rolls</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.payRolls.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="demo">
                    <thead>
                    <tr>
                        <th>Employee</th>
                        <th>Salary</th>
                        <th>Paid Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($payRolls as $payRoll)
                        <tr>
                            <?php
                            $employee = \App\Models\Admin\Employee::where('id',$payRoll->employee_id)->first();
                            ?>
                            <td>{{$employee->name}}</td>
                            <td>{{$payRoll->salary}}</td>
                            <td>{{$payRoll->created_at}}</td>
                            <td>
                                @if($payRoll->status == "Paid")
                                    <span class="label label-success">Paid</span>
                                @else
                                    <span class="label label-warning">UnPaid</span>
                                @endif
                            </td>

                            <td>
                                {!! Form::open(['route' => ['admin.payRolls.destroy', $payRoll->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    {{--<a href="{!! route('admin.payRolls.show', [$payRoll->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                    <a href="{!! route('admin.payRolls.edit', [$payRoll->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
@section('postJquery')
    @parent

@endsection
