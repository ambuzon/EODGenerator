<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnglishController;
use App\Http\Controllers\MathController;
use App\Http\Controllers\ScienceController;
use App\Http\Controllers\GlobalController;
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

Route::get('/english', [EnglishController::class, 'index']);
Route::post('/english/submit', [EnglishController::class, 'submit']);

Route::get('/math', [MathController::class, 'index']);
Route::post('/math/submit', [MathController::class, 'submit']);

Route::get('/science', [ScienceController::class, 'index']);
Route::post('/science/submit', [EnglishController::class, 'submit']);

Route::get('/global', [GlobalController::class, 'index']);
Route::post('/global/submit', [GlobalController::class, 'submit']);