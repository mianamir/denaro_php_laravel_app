@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Course
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <div class="alert alert-success" style="display:none"></div>

                    {!! Form::open(['route' => 'admin.subjects.store', 'files' => true]) !!}

                        @include('admin.subjects.fields')

                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
@endsection


@section('course_scripts')
    <script>
        jQuery(document).ready(function() {

            {{--// Get teachers by expertise for course--}}
            jQuery("#course_teacher_id").attr("disabled", true);
            jQuery( "#course_type_id" ).change(function() {
                var id=$("#course_type_id").val();
                jQuery("#course_teacher_id").attr("disabled", false);
                $.get("{{route('admin.teachers.by.expertise')}}?id="+id, function( data ) {
                    $("#course_teacher_id").html( data );
                }).done(function() {
//                    alert( "second success" );
                }).fail(function() {
                    alert('teacher not found error');

                });

            });

        });
    </script>
@endsection