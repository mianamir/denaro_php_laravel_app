@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Expense
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.expenses.show_fields')
                    <a href="{!! route('admin.expenses.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
