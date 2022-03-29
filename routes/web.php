<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\PostController;

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

/* Post */
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/{post}', [PagesController::class, 'show'])->name('post');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
// Add Posts
Route::view('posts/add','posts.add');
Route::post('/store', [PostController::class, 'store']);
// Edit Posts
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('edit');
Route::put('/update/{post}', [PostController::class, 'update']);
// Delete Posts
Route::delete('/delete/{post}', [PostController::class, 'destroy']);

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

// Archive
Route::get('/archive', [ArchiveController::class, 'index'])->name('archive');