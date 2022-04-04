@php
    $school_years = ["S.Y. 2006 - 2007", "S.Y. 2007 - 2008", "S.Y. 2009 - 2010", "S.Y. 2011 - 2012", "S.Y. 2012 - 2013", "S.Y. 2013 - 2014", "S.Y. 2014 - 2015", "S.Y. 2015 - 2016", "S.Y. 2016 - 2017", "S.Y. 2017 - 2018", "S.Y. 2018 - 2019", "S.Y. 2019 - 2020", "S.Y. 2020 - 2021", "S.Y. 2021 - 2022", "S.Y. 2022 - 2023"];
@endphp
@extends('layouts.app')
@section('content')
    <section id="edit_alumnus" class="container my-5 pt-5 add_edit_form">
        <form class="bg-maingreen p-5 text-light rounded" action="/edit/{{$alumnus->id}}" method="POST">
            @method('PUT')
            @csrf
            <h1 class="text-center mb-4">{{$alumnus->first_name}} {{substr($alumnus->middle_name,0,1)}}. {{$alumnus->last_name}}</h1>
            <hr>
            <h3 class="text-uppercase text-center">Personal Information</h3>
            <hr>
            <p>Name <em class="text-warning">(required)</em></p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{$alumnus->first_name}}">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Middle Name" name="middle_name" value="{{$alumnus->middle_name}}">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{$alumnus->last_name}}">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="student_number" class="col-md-3 col-form-label">Student Number</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="student_number" name="student_number" value="{{$alumnus->student_number}}">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="spouse" class="col-md-3 col-form-label">Name of spouse</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="spouse" name="spouse" value="{{$alumnus->spouse_name}}">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label class="col-md-3 col-form-label">Married to Alumnus/Alumna</label>
                <div class="col-md-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="married_to" id="yes" value="1" {{$alumnus->married_to_alumnus == 1 ? 'checked' : ''}}>
                        <label class="form-check-label" for="yes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="married_to" id="no" value="0" {{$alumnus->married_to_alumnus == 0 ? 'checked' : ''}}>
                        <label class="form-check-label" for="0">No</label>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="date_of_birth" class="col-md-3 col-form-label">Date of Birth <em class="text-warning">(required)</em></label>
                <div class="col-md-9">
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{$alumnus->date_of_birth}}">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label class="col-md-3 col-form-label">Sex <em class="text-warning">(required)</em></label>
                <div class="col-md-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="male" value="Male" {{strtolower($alumnus->sex) == 'male' ? 'checked' : ''}}>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="female" value="Female" {{strtolower($alumnus->sex) == 'female' ? 'checked' : ''}}>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="civil_status" class="col-md-3 col-form-label">Civil Status <em class="text-warning">(required)</em></label>
                <div class="col-md-9">
                    <select class="form-select" aria-label="civil_status" id="civil_status" name="civil_status">
                        <option value="Single" {{strtolower($alumnus->civil_status) == 'single' ? 'selected' : ''}}>Single</option>
                        <option value="Married" {{strtolower($alumnus->civil_status) == 'married' ? 'selected' : ''}}>Married</option>
                        <option value="Single Parent" {{strtolower($alumnus->civil_status) == 'single parent' ? 'selected' : ''}}>Single Parent</option>
                        <option value="widow/widower" {{strtolower($alumnus->civil_status) == 'widow/widower' ? 'selected' : ''}}>Widow/Widower</option>
                        <option value="separated" {{strtolower($alumnus->civil_status) == 'separated' ? 'selected' : ''}}>Separated</option>
                        <option value="annuled" {{strtolower($alumnus->civil_status) == 'annuled' ? 'selected' : ''}}>Annulled</option>
                    </select>
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="children" class="col-md-3 col-form-label">Number of children</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="children" name="children" value="{{$alumnus->number_of_children}}">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="landline" class="col-md-3 col-form-label">Landline Number</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="landline" name="landline" value="{{$alumnus->landline}}">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="mobile" class="col-md-3 col-form-label">Mobile Number</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="mobile" name="mobile" value="{{$alumnus->mobile}}">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="email" class="col-md-3 col-form-label">Email Address</label>
                <div class="col-md-9">
                    <input type="email" class="form-control" id="email" name="email" value="{{$alumnus->email}}">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="address" class="col-md-3 col-form-label">Home Address</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="address" name="address" value="{{$alumnus->address}}">
                </div>
            </div>
            <hr>
            <h3 class="text-uppercase text-center">Educational Background</h3>
            <hr>
            <p>Primary</p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <input class="form-control" type="text" value="Grade Six" disabled readonly>
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School" name="primary" value="{{$alumnus->primary_school}}">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School Year" name="primary_batch" value="{{$alumnus->primary_year}}">
                </div>
            </div>
            <p>Secondary</p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <select class="form-select" aria-label="k12_basic" id="k12_basic" name="k12_basic">
                        <option value="0" {{$alumnus->k12_basic == 0 ? 'selected' : ''}}>Fourth Year</option>
                        <option value="1" {{$alumnus->k12_basic == 1 ? 'selected' : ''}}>Grade 12</option>
                    </select>
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School" name="secondary" value="{{$alumnus->secondary_school}}">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School Year" name="secondary_batch" value="{{$alumnus->secondary_year}}">
                </div>
            </div>
            <p>Bachelor's Degree <em class="text-warning">(required)</em></p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Course" name="bachelor_course" value="{{$alumnus->bachelor_course}}">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School" name="bachelor" value="{{$alumnus->bachelor_school}}">
                </div>
                <div class="col-md">
                    <select class="form-select" aria-label="bachelor_batch" id="bachelor_batch" name="bachelor_batch">
                        @foreach ($school_years as $school_year)
                            <option {{$alumnus->bachelor_year == $school_year ? 'selected' : ''}} value="{{$school_year}}">{{$school_year}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <p>Diploma/Certificate</p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Level/Course" name="diploma_level" value="{{$alumnus->diploma_course}}">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School" name="diploma" value="{{$alumnus->diploma_school}}">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School Year" name="diploma_batch" value="{{$alumnus->diploma_year}}">
                </div>
            </div>
            <p class="text-warning text-uppercase">Graduate Studies</p>
            <p>Masteral's Degree</p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Course" name="masteral_course" value="{{$alumnus->masteral_course}}">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School" name="masteral" value="{{$alumnus->masteral_school}}">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School Year" name="masteral_batch" value="{{$alumnus->masteral_year}}">
                </div>
            </div>
            <p>Doctoral's Degree</p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Course" name="doctoral_course" value="{{$alumnus->doctoral_course}}">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School" name="doctoral" value="{{$alumnus->doctoral_school}}">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School Year" name="doctoral_batch" value="{{$alumnus->doctoral_year}}">
                </div>
            </div>
            <p>Professional's License Earned</p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Professional's License Earned" name="license" value="{{$alumnus->license}}">
                </div>
                <div class="col-md">
                    <input type="date" class="form-control" placeholder="Date Passed/Registered" name="date_registered" value="{{$alumnus->license_date}}">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="License Number" name="license_number" value="{{$alumnus->license_number}}">
                </div>
            </div>
            <hr>
            <h3 class="text-uppercase text-center">Employment Information</h3>
            <hr>
            <p class="text-warning text-uppercase">Current/Last Employment</p>
            <div class="row align-items-center mb-3 g-2">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Position" name="position" value="{{$alumnus->position}}">
                </div>
                <div class="col-md">
                    <select class="form-select" aria-label="related" id="related" name="related">
                        <option value="1" {{$alumnus->related == 1 ? 'selected' : ''}}>Related to Educational Program Completed</option>
                        <option value="0" {{$alumnus->related == 0 ? 'selected' : ''}}>Non-Related to Educational Program Completed</option>
                    </select>
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="date_hired" class="col-md-3 col-form-label">Date Hired</label>
                <div class="col-md-9">
                    <input type="date" class="form-control" id="date_hired" name="date_hired" value="{{$alumnus->date_hired}}">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="company" class="col-md-3 col-form-label">Name and Address of Company</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="company" name="company" value="{{$alumnus->company}}">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="current_job_position" class="col-md-3 col-form-label">Job and Level Position (Current Job)</label>
                <div class="col-md-9">
                    <select class="form-select" aria-label="current_job_position" id="current_job_position" name="current_job_position">
                        <option value="1" {{strtolower($alumnus->current_job_position) == 1 ? 'selected' : ''}}>Rank & File</option>
                        <option value="2" {{strtolower($alumnus->current_job_position) == 2 ? 'selected' : ''}}>Supervisory</option>
                        <option value="3" {{strtolower($alumnus->current_job_position) == 3 ? 'selected' : ''}}>Managerial</option>
                        <option value="0" {{strtolower($alumnus->current_job_position) == 0 ? 'selected' : ''}}>Other</option>
                    </select>
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="first_job_position" class="col-md-3 col-form-label">Job and Level Position (First Job)</label>
                <div class="col-md-9">
                    <select class="form-select" aria-label="first_job_position" id="first_job_position" name="first_job_position">
                        <option value="1" {{strtolower($alumnus->first_job_position) == 1 ? 'selected' : ''}}>Rank & File</option>
                        <option value="2" {{strtolower($alumnus->first_job_position) == 2 ? 'selected' : ''}}>Supervisory</option>
                        <option value="3" {{strtolower($alumnus->first_job_position) == 3 ? 'selected' : ''}}>Managerial</option>
                        <option value="0" {{strtolower($alumnus->current_job_position) == 0 ? 'selected' : ''}}>Other</option>
                    </select>
                </div>
            </div>
            <div class="row align-items-center mb-4">
                <label for="status" class="col-md-3 col-form-label">Employment Status</label>
                <div class="col-md-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="employed" value="employed" {{strtolower($alumnus->employment_status) != 'self-employed' || strtolower($alumnus->employment_status) != 'unemployed' || strtolower($alumnus->employment_status) != 'retired' ? 'checked' : ''}}>
                        <label class="form-check-label" for="employed">Employed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="self_employed" value="self-employed" {{strtolower($alumnus->employment_status) == 'self-employed' ? 'checked' : ''}}>
                        <label class="form-check-label" for="self_employed">Self Employed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="unemployed" value="unemployed" {{strtolower($alumnus->employment_status) == 'unemployed' ? 'checked' : ''}}>
                        <label class="form-check-label" for="unemployed">Not Employed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="retired" value="retired" {{strtolower($alumnus->employment_status) == 'retired' ? 'checked' : ''}}>
                        <label class="form-check-label" for="retired">Retired</label>
                    </div>
                </div>
            </div>
            {{-- Self- Employed --}}
            <div class="self_employed">
                <p class="text-warning text-uppercase">Self Employed</p>
                <div class="row align-items-center mb-3 g-2">
                    <div class="col-md">
                        <input type="text" class="form-control" placeholder="Name and Address of Business" name="name_business" value="{{$alumnus->name_address_of_own_business}}">
                    </div>
                    <div class="col-md">
                        <input type="text" class="form-control" placeholder="Type of Business" name="type_business" value="{{$alumnus->business_type}}">
                    </div>
                </div>
            </div>
            {{-- Unemployed --}}
            <div class="unemployed">
                <p class="text-warning text-uppercase">Not Employed</p>
                <div class="row align-items-center mb-3">
                    <label for="reason" class="col-md-3 col-form-label">Reason</label>
                    <div class="col-md-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="continued_study" value="continued study" {{strtolower($alumnus->unemployed_reason) == 'continued study' ? 'checked' : ''}}>
                            <label class="form-check-label" for="continued_study">Continued Study</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="applying" value="applying for a job" {{strtolower($alumnus->unemployed_reason) == 'applying for a job' ? 'checked' : ''}}>
                            <label class="form-check-label" for="applying">Applying for a Job</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="no_job_opportunities" value="No Job Opportunities" {{strtolower($alumnus->unemployed_reason) == 'no job opportunities' ? 'checked' : ''}}>
                            <label class="form-check-label" for="no_job_opportunities">No Job Opportunities</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="health_concern" value="Health Related Concerns" {{strtolower($alumnus->unemployed_reason) == 'health related concerns' ? 'checked' : ''}}>
                            <label class="form-check-label" for="health_concern">Health Related Concerns</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="decided_not_work" value="Decided not to work/Did not look for a job" {{strtolower($alumnus->unemployed_reason) == 'decided not to work/did not look for a job' ? 'checked' : ''}}>
                            <label class="form-check-label" for="decided_not_work">Decided not to work/Did not look for a job</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="abroad" value="Abroad/Migrate" {{strtolower($alumnus->unemployed_reason) == 'abroad/migrate' ? 'checked' : ''}}>
                            <label class="form-check-label" for="abroad">Abroad/Migrate</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="lack_exprience" value="Lack of Work Exprience" {{strtolower($alumnus->unemployed_reason) == 'lack of work exprience' ? 'checked' : ''}}>
                            <label class="form-check-label" for="lack_exprience">Lack of Work Exprience</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="others" value="others">
                            <label class="form-check-label" for="others">Others</label>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <input id="unemployed_other_reason" type="text" class="form-control" placeholder="Other reason" value="{{$alumnus->unemployed_reason}}">
                </div>
            </div>
            {{-- Retired --}}
            <div class="retired">
                <p class="text-warning text-uppercase">Retired</p>
                <div class="row align-items-center mb-3 g-2">
                    <div class="col-md">
                        <input type="text" class="form-control" placeholder="Name and Address of Last Company" name="retired_company" value="{{$alumnus->name_address_of_last_company}}">
                    </div>
                    <div class="col-md">
                        <input type="text" class="form-control" placeholder="Reasons for retirement" name="reason_retired" value="{{$alumnus->retired_reason}}">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <label for="date_of_retirement" class="col-md-3 col-form-label">Date of retirement</label>
                    <div class="col-md-9">
                        <input type="date" class="form-control" id="date_of_retirement" name="date_of_retirement" value="{{$alumnus->date_retired}}">
                    </div>
                </div>
            </div>
            <div class="d-grid pt-3">
                <button class="btn btn-block text-light bg-darkgreen">Save</button>
            </div>
        </form>
    </section>
@endsection