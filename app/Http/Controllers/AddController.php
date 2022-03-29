<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class AddController extends Controller{
    public function addAlumni(Request $request){
        // dd(request()->all());
        // request()->validate([
        //     'first_name' => 'required',
        //     'middle_name' => 'required',
        //     'last_name' => 'required',
        //     'date_of_birth' => 'required',
        //     'sex' => 'required',
        //     'civil_status' => 'required'
        // ]);

        Student::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'spouse_name' => $request->spouse ?? '',
            'married_to_alumni' => $request->married_to ?? '',
            'date_of_birth' => $request->date_of_birth ?? '',
            'sex' => $request->sex ?? '',
            'civil_status' => $request->civil_status ?? '',
            'number_of_children' => $request->children ?? '',
            'landline' => $request->landline ?? '',
            'mobile' => $request->mobile ?? '',
            'email' => $request->email ?? '',
            'address' => $request->address ?? '',
            'primary_school' => $request->primary ?? '',
            'primary_year' => $request->primary_batch ?? '',
            'k12_basic' => $request->k12_basic ?? '',
            'secondary_school' => $request->secondary ?? '',
            'secondary_year' => $request->secondary_batch ?? '',
            'bachelor_course' => $request->bachelor_course,
            'bachelor_school' => $request->bachelor,
            'bachelor_year' => $request->bachelor_batch,
            'diploma_course' => $request->diploma_level ?? '',
            'diploma_school' => $request->diploma ?? '',
            'diploma_year' => $request->diploma_batch ?? '',
            'masteral_course' => $request->masteral_course ?? '',
            'masteral_school' => $request->masteral ?? '',
            'masteral_year' => $request->masteral_batch ?? '',
            'doctoral_course' => $request->doctoral_course ?? '',
            'doctoral_school' => $request->doctoral ?? '',
            'doctoral_year' => $request->doctoral_batch ?? '',
            'license' => $request->license ?? '',
            'license_date' => $request->date_registered ?? '',
            'license_number' => $request->license_number ?? '',
            'position' => $request->position ?? '',
            'related' => $request->related ?? '',
            'date_hired' => $request->date_hired ?? '',
            'company' => $request->company ?? '',
            'current_job_position' => $request->current_job_position ?? '',
            'first_job_position' => $request->first_job_position ?? '',
            'employment_status' => $request->status ?? '',
            'name_address_of_own_business' => $request->name_business ?? '',
            'business_type' => $request->type_business ?? '',
            'unemployed_reason' => $request->reason ?? '',
            'name_address_of_last_company' => $request->retired_company ?? '',
            'retired_reason' => $request->reason_retired ?? '',
            'date_retired' => $request->date_of_retirement ?? ''
        ]);

        return redirect('/list/S.Y. 2006 - 2007');
    }
}