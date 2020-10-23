@extends('admin2.layouts.master')

@section('content')
    <div class="row">
        <form class="form-inline" action="{{route('admin.expenses.search')}}" method="post" enctype="multipart/form-data">
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
        <h1 class="pull-left">Expenses</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.expenses.create') !!}">Add New</a>
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
                       <th>Name</th>
                       <th>Details</th>
                       <th>Type</th>
                       <th>Product</th>
                       <th>Supplier</th>
                       <th>Employee</th>
                       <th>Amount</th>
                       <th>Date</th>
                       <th>Status</th>
                       <th>Actions</th>
                   </tr>
                    </thead>
                    <tbody>

                    @foreach($expenses as $expense)
                        <tr>
                            <td>{{$expense->name}}</td>
                            <td>{{$expense->details}}</td>
                            <td>{{$expense->type}}</td>
                            <?php
                            $product = \App\Models\Admin\Product::where('id',$expense->product_id)->first();
                            $supplier = \App\Models\Admin\Suppier::where('id',$expense->supplier_id)->first();
                            $employee = \App\Models\Admin\Employee::where('id',$expense->employee_id)->first();
                            ?>
                            <td>
                                @if($product != null)
                                    {{$product->make}}
                                 @else
                                     NotAvailable
                                 @endif
                            </td>
                            <td>
                                @if($supplier != null)
                                    {{$supplier->name}}
                                @else
                                    NotAvailable
                                @endif
                            </td>
                            <td>
                                @if($employee != null)
                                    {{$employee->name}}
                                @else
                                    NotAvailable
                                @endif
                            </td>
                            <td>{{$expense->amount}}</td>
                            <td>{{$expense->created_at}}</td>
                            <td>
                                @if($expense->status == "Completed")
                                    <span class="label label-success">Completed</span>
                                @elseif($expense->status == "Pending")
                                    <span class="label label-warning">Pending</span>
                                @else
                                    <span class="label label-danger">Deleted</span>
                                @endif
                            </td>

                            <td>
                                {!! Form::open(['route' => ['admin.expenses.destroy', $expense->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    {{--<a href="{!! route('admin.expenses.show', [$expense->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                    <a href="{!! route('admin.expenses.edit', [$expense->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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


