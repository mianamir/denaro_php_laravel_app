@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Expenses</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.expenses.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <br>
        <div class="row">
            <div class="col-md-12">
                <h4 style="text-align: center">Product Expense: <strong>{{$totalPrice}}</strong></h4>
            </div>

        </div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="myTable">
                    <thead>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th colspan="3">Actions</th>
                    </thead>
                    <tbody>

                    @foreach($expenses as $expense)
                        <tr>
                            <td>{{$expense->name}}</td>
                            <td>{{$expense->details}}</td>
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
                                {{--{!! Form::open(['route' => ['admin.expenses.destroy', $expense->id], 'method' => 'delete']) !!}--}}
                                <div class='btn-group'>
                                    {{--<a href="{!! route('admin.expenses.show', [$expense->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                    <a href="{!! route('admin.expenses.edit', [$expense->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                                </div>
                                {{--{!! Form::close() !!}--}}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

