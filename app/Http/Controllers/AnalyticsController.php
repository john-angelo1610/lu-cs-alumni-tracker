<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AnalyticsController extends Controller{
    public function index() {
        $alumni = Student::all();

        return view('analytics.index', compact('alumni'));
    }
}
