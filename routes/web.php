<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SearchController;
/*
/*
/*
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::post('/submit', [HomeController::class, 'submit']);

Route::get('/english', [SubjectsController::class, 'english'])->name('subjects.english');
Route::get('/science', [SubjectsController::class, 'science'])->name('subjects.science');
Route::get('/math', [SubjectsController::class, 'math'])->name('subjects.math');
Route::get('/global', [SubjectsController::class, 'global'])->name('subjects.global');
Route::get('/students/search', [StudentsController::class, 'search'])->name('students.search');
Route::get('/comments/search', [CommentsController::class, 'search'])->name('comments.search');
Route::resources([
    'subjects' => SubjectsController::class,
    'comments' => CommentsController::class,
    'students' => StudentsController::class,
]);
