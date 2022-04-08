<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AnalyticsController extends Controller{
    public function __construct() {
        $this->middleware(['auth', 'isAdmin', 'verified']);
    }

    public function index() {
        $alumni = Student::all();

        return view('analytics.index', compact('alumni'));
    }
}
