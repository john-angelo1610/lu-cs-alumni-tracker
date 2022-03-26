<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index($school_year) {
        $bachelor_year = $school_year;
        $alumni = Student::all()->where('bachelor_year', $school_year);
        return view('list.index', compact('alumni', 'bachelor_year'));
    }

    public function show($id) {
        $alumnus = Student::FindOrFail($id);
        return view('list.view', compact('alumnus'));
    }

    public function edit($id) {
        $alumnus = Student::FindOrFail($id);
        return view('list.edit', compact('alumnus'));
    }

    public function update(Student $alumnus){
        // dd(request()->all());
        // request()->validate([
        //     'first_name' => 'required',
        //     'middle_name' => 'required',
        //     'last_name' => 'required',
        //     'date_of_birth' => 'required',
        //     'sex' => 'required',
        //     'civil_status' => 'required'
        // ]);
        $alumnus->update([
            'first_name' => request('first_name'),
            'middle_name' => request('middle_name'),
            'last_name' => request('last_name')
        ]);

        return redirect('/list/view/'.$alumnus->id);
    }
}
