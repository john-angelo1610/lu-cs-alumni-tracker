@php
    $school_years = ["S.Y. 2006 - 2007", "S.Y. 2007 - 2008", "S.Y. 2009 - 2010", "S.Y. 2011 - 2012", "S.Y. 2012 - 2013", "S.Y. 2013 - 2014", "S.Y. 2014 - 2015", "S.Y. 2015 - 2016", "S.Y. 2016 - 2017", "S.Y. 2017 - 2018", "S.Y. 2018 - 2019", "S.Y. 2019 - 2020", "S.Y. 2020 - 2021", "S.Y. 2021 - 2022", "S.Y. 2022 - 2023"];
@endphp
@extends('layouts.app')
@section('content')
    <section id="add_alumnus" class="container my-5 pt-5 add_edit_form">
        <form class="bg-maingreen p-5 text-light rounded" action="/add" method="POST">
            @csrf
            <h2 class="text-center mb-4">Alumni Tracking Form</h2>
            <hr>
            <h3 class="text-uppercase text-center">Personal Information</h3>
            <hr>
            <p>Name <em class="text-warning">(required)</em></p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="First Name" name="first_name">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Middle Name" name="middle_name">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="student_number" class="col-md-3 col-form-label">Student Number <em class="text-warning">(required)</em></label>
                <div class="col-md-9">
                    <input type="text" class="form-control @error('student_number') is-invalid @enderror" id="student_number" name="student_number">
                </div>
                @error('student_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="row align-items-center mb-3">
                <label for="spouse" class="col-md-3 col-form-label">Name of spouse</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="spouse" name="spouse">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label class="col-md-3 col-form-label">Married to Alumnus/Alumna</label>
                <div class="col-md-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="married_to" id="yes" value="yes">
                        <label class="form-check-label" for="yes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="married_to" id="no" value="no">
                        <label class="form-check-label" for="no">No</label>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="date_of_birth" class="col-md-3 col-form-label">Date of Birth</label>
                <div class="col-md-9">
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label class="col-md-3 col-form-label">Sex</label>
                <div class="col-md-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="male" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="civil_status" class="col-md-3 col-form-label">Civil Status</label>
                <div class="col-md-9">
                    <select class="form-select" aria-label="civil_status" id="civil_status" name="civil_status">
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Single Parent">Single Parent</option>
                        <option value="Widow/Widower">Widow/Widower</option>
                        <option value="Separated">Separated</option>
                        <option value="Annuled">Annulled</option>
                    </select>
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="children" class="col-md-3 col-form-label">Number of children</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="children" name="children">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="landline" class="col-md-3 col-form-label">Landline Number</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="landline" name="landline">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="mobile" class="col-md-3 col-form-label">Mobile Number</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="mobile" name="mobile">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="email" class="col-md-3 col-form-label">Email Address</label>
                <div class="col-md-9">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="address" class="col-md-3 col-form-label">Home Address</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="address" name="address">
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
                    <input type="text" class="form-control" placeholder="School" name="primary">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School Year" name="primary_batch">
                </div>
            </div>
            <p>Secondary</p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <select class="form-select" aria-label="k12_basic" id="k12_basic" name="k12_basic">
                        <option selected value="0">Fourth Year</option>
                        <option value="1">Grade 12</option>
                    </select>
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School" name="secondary">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School Year" name="secondary_batch">
                </div>
            </div>
            <p>Bachelor's Degree <em class="text-warning">(required)</em></p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Course" name="bachelor_course">
                </div>
                <div class="col-md">
                    Laguna University
                </div>
                <div class="col-md">
                    <select class="form-select" aria-label="bachelor_batch" id="bachelor_batch" name="bachelor_batch">
                        <option selected disabled>Select school year</option>
                        @foreach ($school_years as $school_year)
                            <option value="{{$school_year}}">{{$school_year}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <p>Diploma/Certificate</p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Level/Course" name="diploma_level">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School" name="diploma">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School Year" name="diploma_batch">
                </div>
            </div>
            <p class="text-warning text-uppercase">Graduate Studies</p>
            <p>Masteral's Degree</p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Course" name="masteral_course">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School" name="masteral">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School Year" name="masteral_batch">
                </div>
            </div>
            <p>Doctoral's Degree</p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Course" name="doctoral_course">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School" name="doctoral">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="School Year" name="doctoral_batch">
                </div>
            </div>
            <p>Professional's License Earned</p>
            <div class="row align-items-center mb-3 g-3">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Professional's License Earned" name="license">
                </div>
                <div class="col-md">
                    <input type="date" class="form-control" placeholder="Date Passed/Registered" name="date_registered">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="License Number" name="license_number">
                </div>
            </div>
            <hr>
            <h3 class="text-uppercase text-center">Employment Information</h3>
            <hr>
            <p class="text-warning text-uppercase">Current/Last Employment</p>
            <div class="row align-items-center mb-3 g-2">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Position" name="position">
                </div>
                <div class="col-md">
                    <select class="form-select" aria-label="related" id="related" name="related">
                        <option selected value="1">Related to Educational Program Completed</option>
                        <option value="2">Non-Related to Educational Program Completed</option>
                    </select>
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="date_hired" class="col-md-3 col-form-label">Date Hired</label>
                <div class="col-md-9">
                    <input type="date" class="form-control" id="date_hired" name="date_hired">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="company" class="col-md-3 col-form-label">Name and Address of Company</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="company" name="company">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="current_job_position" class="col-md-3 col-form-label">Job and Level Position (Current Job)</label>
                <div class="col-md-9">
                    <select class="form-select" aria-label="current_job_position" id="current_job_position" name="current_job_position">
                        <option value="1">Rank & File</option>
                        <option value="2">Supervisory</option>
                        <option value="3">Managerial</option>
                        <option selected value="0">Other</option>
                    </select>
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <label for="first_job_position" class="col-md-3 col-form-label">Job and Level Position (First Job)</label>
                <div class="col-md-9">
                    <select class="form-select" aria-label="first_job_position" id="first_job_position" name="first_job_position">
                        <option value="1">Rank & File</option>
                        <option value="2">Supervisory</option>
                        <option value="3">Managerial</option>
                        <option selected value="0">Other</option>
                    </select>
                </div>
            </div>
            <div class="row align-items-center mb-4">
                <label for="status" class="col-md-3 col-form-label">Employment Status</label>
                <div class="col-md-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="employed" value="employed">
                        <label class="form-check-label" for="employed">Employed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="self_employed" value="self_employed">
                        <label class="form-check-label" for="self_employed">Self Employed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="unemployed" value="unemployed">
                        <label class="form-check-label" for="unemployed">Not Employed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="retired" value="retired">
                        <label class="form-check-label" for="retired">Retired</label>
                    </div>
                </div>
            </div>
            {{-- Self-Employed --}}
            <div class="self_employed">
                <p class="text-warning text-uppercase">Self Employed</p>
                <div class="row align-items-center mb-3 g-2">
                    <div class="col-md">
                        <input type="text" class="form-control" placeholder="Name and Address of Business" name="name_business">
                    </div>
                    <div class="col-md">
                        <input type="text" class="form-control" placeholder="Type of Business" name="type_business">
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
                            <input class="form-check-input" type="radio" name="reason" id="continue_study" value="continue_study">
                            <label class="form-check-label" for="continue_study">Continued Study</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="applying" value="applying">
                            <label class="form-check-label" for="applying">Applying for a Job</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="no_job_opportunities" value="no_job_opportunities">
                            <label class="form-check-label" for="no_job_opportunities">No Job Opportunities</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="health_concern" value="health_concern">
                            <label class="form-check-label" for="health_concern">Health Related Concerns</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="decided_not_work" value="decided_not_work">
                            <label class="form-check-label" for="decided_not_work">Decided not to work/Did not look for a job</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="abroad" value="abroad">
                            <label class="form-check-label" for="abroad">Abroad/Migrate</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="lack_exprience" value="lack_exprience">
                            <label class="form-check-label" for="lack_exprience">Lack of Work Exprience</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="reason" id="others" value="others">
                            <label class="form-check-label" for="others">Others</label>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <input id="unemployed_other_reason" type="text" class="form-control" placeholder="Other reason">
                </div>
            </div>
            {{-- Retired --}}
            <div class="retired">
                <p class="text-warning text-uppercase">Retired</p>
                <div class="row align-items-center mb-3 g-2">
                    <div class="col-md">
                        <input type="text" class="form-control" placeholder="Name and Address of Last Company" name="retired_company">
                    </div>
                    <div class="col-md">
                        <input type="text" class="form-control" placeholder="Reasons for retirement" name="reason_retired">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <label for="date_of_retirement" class="col-md-3 col-form-label">Date of retirement</label>
                    <div class="col-md-9">
                        <input type="date" class="form-control" id="date_of_retirement" name="date_of_retirement">
                    </div>
                </div>
            </div>
            <div class="d-grid pt-3">
                <button type="submit" class="btn btn-block text-light bg-darkgreen">Add</button>
            </div>
        </form>
    </section>
@endsection