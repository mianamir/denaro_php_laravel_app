@extends('admin.layouts.master')

@section('title', 'All Roles')

@section('content')
<div class="row">
Indedx page 
<br>
@if(Auth::user()->can('create-post'))
<br><a href="#" class="btn btn-primary">Create Post</a>
@endif


@if(Auth::user()->can('edit-post'))
<a href="#" class="btn btn-warning">Update Post</a>
@endif
</div>
@endsection