@extends('layouts.app')
@section('content')
    <section id="view_alumnus" class="container my-5 pt-5 d-flex justify-content-center">
        <div class="bg-maingreen p-5 text-light rounded">
            <div class="float-end"><a href="../edit/{{$alumnus->id}}"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a href="#"><i class="fas fa-archive"></i></a></div>
            <h2 class="text-center mb-4">{{$alumnus->first_name}} {{substr($alumnus->middle_name,0,1)}}. {{$alumnus->last_name}}</h2>
            <hr>
            <h3 class="text-uppercase text-center">Personal Information</h3>
            <hr>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Name of spouse:</p>
                <p class="mx-2">{{$alumnus->spouse_name}}</p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Married to Alumni:</p>
                <p class="mx-2">
                    @if ($alumnus->married_to_alumnus)
                        Yes
                    @else
                        No
                    @endif
                </p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Date of Birth:</p>
                <p class="mx-2">{{\Carbon\Carbon::createFromFormat('Y-m-d', $alumnus->date_of_birth)->format('F d, Y')}}</p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Sex:</p>
                <p class="mx-2">{{$alumnus->sex}}</p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Civil Status:</p>
                
                <p class="mx-2">{{$alumnus->civil_status}}</p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Number of children:</p>
                <p class="mx-2">{{$alumnus->number_of_children}}</p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Landline Number:</p>
                <p class="mx-2">{{$alumnus->landline}}</p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Mobile Number:</p>
                <p class="mx-2">{{$alumnus->mobile}}</p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Email Address:</p>
                <p class="mx-2">{{$alumnus->email}}</p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Home Address:</p>
                <p class="mx-2">{{$alumnus->address}}</p>
            </div>
            <hr>
            <h3 class="text-uppercase text-center">Educational Background</h3>
            <hr>
            <p class="fw-bold">Primary:</p>
            <div class="d-flex align-items-center mb-3">
                <p>Grade Six</p>
                <p class="mx-3">{{$alumnus->primary_school}}</p>
                <p>{{$alumnus->primary_year}}</p>
            </div>
            <p class="fw-bold">Secondary:</p>
            <div class="d-flex align-items-center mb-3">
                <p>
                    @if ($alumnus->k12_basic == 0)
                        4th year High School
                    @else
                        Grade 12
                    @endif
                </p>
                <p class="mx-3">{{$alumnus->secondary_school}}</p>
                <p>{{$alumnus->secondary_year}}</p>
            </div>
            <p class="fw-bold">Bachelor's Degree:</p>
            <div class="d-flex align-items-center mb-3">
                <p>{{$alumnus->bachelor_school}}</p>
                <p class="mx-3">{{$alumnus->bachelor_course}}</p>
                <p>{{$alumnus->bachelor_year}}</p>
            </div>
            <p class="fw-bold">Diploma/Certificate:</p>
            <div class="d-flex align-items-center mb-3">
                <p>{{$alumnus->diploma_school}}</p>
                <p class="mx-3">{{$alumnus->diploma_course}}</p>
                <p>{{$alumnus->diploma_year}}</p>
            </div>
            <p class="text-warning text-uppercase">Graduate Studies</p>
            <p class="fw-bold">Masteral's Degree:</p>
            <div class="d-flex align-items-center mb-3">
                <p>{{$alumnus->masteral_school}}</p>
                <p class="mx-3">{{$alumnus->masteral_course}}</p>
                <p>{{$alumnus->masteral_year}}</p>
            </div>
            <p class="fw-bold">Doctoral's Degree:</p>
            <div class="d-flex align-items-center mb-3">
                <p>{{$alumnus->doctoral_school}}</p>
                <p class="mx-3">{{$alumnus->doctoral_course}}</p>
                <p>{{$alumnus->doctoral_year}}</p>
            </div>
            <p class="fw-bold">Professional's License Earned:</p>
            <div class="d-flex align-items-center mb-3">
                <p>{{$alumnus->license}}</p>
                <p class="mx-3">{{\Carbon\Carbon::createFromFormat('Y-m-d', $alumnus->license_date)->format('F d, Y')}}</p>
                <p>{{$alumnus->license_number}}</p>
            </div>
            <hr>
            <h3 class="text-uppercase text-center">Employment Information</h3>
            <hr>
            <p class="text-warning text-uppercase">Current/Last Employment</p>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Position:</p>
                <p class="mx-2">{{$alumnus->position}}</p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Related to Educational Program Completed:</p>
                <p class="mx-2">{{$alumnus->related == 1 ? 'Yes' : 'No'}}</p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Date Hired:</p>
                <p class="mx-2">{{\Carbon\Carbon::createFromFormat('Y-m-d', $alumnus->date_hired)->format('F d, Y')}}</p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Name and Address of Company:</p>
                <p class="mx-2">{{$alumnus->company}}</p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Job and Level Position (Current Job):</p>
                <p class="mx-2">
                    @if ($alumnus->current_job_position == 1)
                        Rank & File
                    @elseif ($alumnus->current_job_position == 2)
                        Supervisory
                    @elseif ($alumnus->current_job_position == 3)
                        Supervisory
                    @else
                        Other
                    @endif
                </p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Job and Level Position (First Job):</p>
                <p class="mx-2">
                    @if ($alumnus->first_job_position == 1)
                        Rank & File
                    @elseif ($alumnus->first_job_position == 2)
                        Supervisory
                    @elseif ($alumnus->first_job_position == 3)
                        Supervisory
                    @else
                        Other
                    @endif
                </p>
            </div>
            @if (strtolower($alumnus->employment_status) == 'self-employed' || ($alumnus->employment_status) == 'retired' || strtolower($alumnus->employment_status) == 'unemployed')
                <div class="d-flex align-items-center mb-3">
                    <p class="fw-bold">Employment Status:</p>
                    <p class="mx-2">{{$alumnus->employment_status}}</p>
                </div>
            @endif
            @if (strtolower($alumnus->employment_status) == 'self-employed')
                <div class="d-flex align-items-center mb-3">
                    <p class="fw-bold">Name & Address of Business:</p>
                    <p class="mx-2">{{$alumnus->name_address_of_own_business}}</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <p class="fw-bold">Type of Business:</p>
                    <p class="mx-2">{{$alumnus->business_type}}</p>
                </div>
            @elseif (strtolower($alumnus->employment_status) == 'retired')
                <div class="d-flex align-items-center mb-3">
                    <p class="fw-bold">Name & Address of Last Company:</p>
                    <p class="mx-2">{{$alumnus->name_address_of_last_company}}</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <p class="fw-bold">Reason for retirement:</p>
                    <p class="mx-2">{{$alumnus->retired_reason}}</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <p class="fw-bold">Date of retirement:</p>
                    <p class="mx-2">{{\Carbon\Carbon::createFromFormat('Y-m-d', $alumnus->date_retired)->format('F d, Y')}}</p>
                </div>
            @elseif (strtolower($alumnus->employment_status) == 'unemployed')
            <div class="d-flex align-items-center mb-3">
                <p class="fw-bold">Reason:</p>
                <p class="mx-2">{{$alumnus->unemployed_reason}}</p>
            </div>
            @endif
        </div>
    </section>
@endsection