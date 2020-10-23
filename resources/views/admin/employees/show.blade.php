@extends('admin2.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Student
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <p>Ref. No: {{$employee->reg_no}}</p>
                    <p>Full Name: {{$employee->full_name}}</p>
                    <p>Gender: {{$employee->gender}}</p>
                    <p>Date of Birth: {{$employee->dob}}</p>
                    <p>Place of Birth: {{$employee->place_of_birth}}</p>
                    <p>Religion: {{$employee->religion}}</p>
                    <p>Sect: {{$employee->sect}}</p>
                    <p>Nationality: {{$employee->nationality}}</p>
                    <p>Latest School Attended: {{$employee->latest_school_attended}}</p>
                    <p>Names of Real Brothers Sisters PPS: {{$employee->names_of_real_brothers_sisters_pps}}</p>
                    <p>Father's Name: {{$employee->fathers_name}}</p>
                    <p>Email: {{$employee->email}}</p>
                    <p>CNIC: {{$employee->cnic}}</p>
                    <p>Qualifications: {{$employee->qualifications}}</p>
                    <p>Occupation: {{$employee->occupation}}</p>
                    <p>Office Address: {{$employee->office_address}}</p>
                    <p>Present Home Address: {{$employee->present_home_address}}</p>
                    <p>Permanent Home Address: {{$employee->permanent_home_address}}</p>
                    <p>Office Phone No: {{$employee->office_phone_no}}</p>
                    <p>Present Home Phone No: {{$employee->present_home_phone_no}}</p>
                    <p>Guardian Name: {{$employee->name}}</p>
                    <p>Guardian Relation: {{$employee->name_parents_guardian}}</p>
                    <p>Status: {{$employee->status}}</p>

                    <a href="{!! route('admin.employees.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
