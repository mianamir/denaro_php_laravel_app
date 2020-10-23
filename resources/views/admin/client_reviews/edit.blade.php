@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Client Review
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($clientReview, ['route' => ['admin.clientReviews.update', $clientReview->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.client_reviews.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection