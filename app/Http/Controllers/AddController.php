<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class AddController extends Controller{
    public function addAlumni(){
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
            'first_name' => request('first_name'),
            'middle_name' => request('middle_name'),
            'last_name' => request('last_name'),
            'bachelor_year' => request('bachelor_batch')
        ]);

        return redirect('/list/S.Y. 2006 - 2007');
    }
}