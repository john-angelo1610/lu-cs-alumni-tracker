<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\ArchiveController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'index'])->name('home');

// List
Route::get('/list/{school_year}', [ListController::class, 'index'])->name('list');
Route::get('/list/view/{id}', [ListController::class, 'show'])->name('view');

// Add
Route::post('add', [AddController::class, 'addAlumni']);
Route::view('add','add/index');

// Edit
Route::get('/list/edit/{id}', [ListController::class, 'edit'])->name('edit');
Route::put('/edit/{alumnus}', [ListController::class, 'update']);

// Analytics
Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics');
// Delete
Route::get('/archive', [ArchiveController::class, 'index'])->name('archive');