@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Payment Account
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($paymentAccount, ['route' => ['admin.paymentAccounts.update', $paymentAccount->id], 'method' => 'patch']) !!}

                        @include('admin.payment_accounts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection