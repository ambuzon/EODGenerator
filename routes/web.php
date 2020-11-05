<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubjectsController;
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

route::get('/english', [SubjectsController::class, 'english']);
route::get('/science', [SubjectsController::class, 'science']);
route::get('/math', [SubjectsController::class, 'math']);
route::get('/global', [SubjectsController::class, 'global']);
Route::resource('subjects', SubjectsController::class);