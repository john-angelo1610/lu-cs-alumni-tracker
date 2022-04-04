<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    use HasFactory;
    protected $fillable = [
        'student_number', 'first_name', 'middle_name', 'last_name', 'spouse_name', 'married_to_alumnus', 'date_of_birth', 'sex', 'civil_status', 'number_of_children', 'landline', 'mobile', 'email', 'address', 'primary_school', 'primary_year', 'k12_basic', 'secondary_school', 'secondary_year', 'bachelor_course','bachelor_school', 'bachelor_year', 'diploma_course', 'diploma_school', 'diploma_year', 'masteral_course', 'masteral_school', 'masteral_year', 'doctoral_course', 'doctoral_school', 'doctoral_year', 'license', 'license_date', 'license_number', 'position', 'related', 'date_hired', 'company', 'current_job_position', 'first_job_position', 'employment_status', 'name_address_of_own_business', 'business_type', 'unemployed_reason', 'name_address_of_last_company', 'retired_reason', 'date_retired', 'is_archive'
    ];
}
