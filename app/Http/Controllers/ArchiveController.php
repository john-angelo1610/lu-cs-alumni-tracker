<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ArchiveController extends Controller {
    public function __construct() {
        $this->middleware(['auth', 'isAdmin']);
    }

    public function index() {
        $archived_alumni = Student::all()->where('is_archive', 1);
        return view('archive.index', compact('archived_alumni'));
    }

    public function destroy(Student $id) {
        $id->delete();
        return redirect('/archive');
    }
}
