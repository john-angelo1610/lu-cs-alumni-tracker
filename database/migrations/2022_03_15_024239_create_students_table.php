<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            /* Personal Info */
            $table->string('first_name')->nulllable()->default(NULL);
            $table->string('middle_name')->nulllable()->default(NULL);
            $table->string('last_name')->nulllable()->default(NULL);
            $table->string('spouse_name')->nulllable()->default(NULL);
            $table->boolean('married_to_alumnus')->nulllable()->default(NULL);
            $table->date('date_of_birth')->nulllable()->default('0000-00-00');
            $table->string('sex')->nulllable()->default(NULL);
            $table->string('civil_status')->nulllable()->default(NULL);
            $table->integer('number_of_children')->nulllable()->default(NULL);
            $table->string('landline')->nulllable()->default(NULL);
            $table->string('mobile')->nulllable()->default(NULL);
            $table->string('email')->nulllable()->default(NULL);
            $table->string('address')->nulllable()->default(NULL);
            /* Educational Background */
            // Primary
            $table->string('primary_school')->nulllable()->default(NULL);
            $table->string('primary_year')->nulllable()->default(NULL);
            // Secondary
            $table->string('k12_basic')->nulllable()->default(NULL);
            $table->string('secondary_school')->nulllable()->default(NULL);
            $table->string('secondary_year')->nulllable()->default(NULL);
            // bachelor
            $table->string('bachelor_course')->nulllable()->default(NULL);
            $table->string('bachelor_school')->nulllable()->default(NULL);
            $table->string('bachelor_year')->nulllable()->default(NULL);
            // Diploma/Certificate
            $table->string('diploma_course')->nulllable()->default(NULL);
            $table->string('diploma_school')->nulllable()->default(NULL);
            $table->string('diploma_year')->nulllable()->default(NULL);
            // Masteral
            $table->string('masteral_course')->nulllable()->default(NULL);
            $table->string('masteral_school')->nulllable()->default(NULL);
            $table->string('masteral_year')->nulllable()->default(NULL);
            // doctoral
            $table->string('doctoral_course')->nulllable()->default(NULL);
            $table->string('doctoral_school')->nulllable()->default(NULL);
            $table->string('doctoral_year')->nulllable()->default(NULL);
            // Professional license
            $table->string('license')->nulllable()->default(NULL);
            $table->date('license_date')->nulllable()->default('0000-00-00');
            $table->string('license_number')->nulllable()->default(NULL);
            /*Employment Information */
            $table->string('position')->nulllable()->default(NULL);
            $table->boolean('related')->nulllable()->default(NULL);
            $table->date('date_hired')->nulllable()->default('0000-00-00');
            $table->string('company')->nulllable()->default(NULL);
            $table->string('current_job_position')->nulllable()->default(NULL);
            $table->string('first_job_position')->nulllable()->default(NULL);
            $table->string('employment_status')->nulllable()->default(NULL);
            // self-employment
            $table->string('name_address_of_own_business')->nulllable()->default(NULL);
            $table->string('business_type')->nulllable()->default(NULL);
            // not employed
            $table->string('unemployed_reason')->nulllable()->default(NULL);
            // retired
            $table->string('name_address_of_last_company')->nulllable()->default(NULL);
            $table->string('retired_reason')->nulllable()->default(NULL);
            $table->date('date_retired')->nulllable()->default('0000-00-00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
