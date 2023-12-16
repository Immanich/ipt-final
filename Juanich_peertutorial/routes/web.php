<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TraineeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('/resources/views/base/home.blade.php');
// });

Route::get('/', [SiteController::class, 'home'])->name('home');
    
Route::get('/users', [UserController::class, 'users'])->name('users');
Route::get('/users/create', [UserController::class, 'create'])->name('users');
Route::post('/users/create', [UserController::class, 'store'])->name('users');
Route::get('/users/{user}', [UserController::class, 'edit']);
Route::post('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/delete/{user}', [UserController::class, 'delete']);

Route::get('/trainors', [TrainorController::class, 'trainors'])->name('trainors');
Route::get('/trainors/create', [TrainorController::class, 'create']);
Route::post('/trainors/create', [TrainorController::class, 'store']);
Route::get('/trainors/{trainor}', [TrainorController::class, 'edit']);
Route::post('/trainors/{trainor}', [TrainorController::class, 'update']);
Route::delete('/trainors/delete/{trainor}', [TrainorController::class, 'delete']);

Route::get('/courses', [CourseController::class, 'courses'])->name('courses');
Route::get('/courses/create', [CourseController::class, 'create']);
Route::post('/courses/create', [CourseController::class, 'store']);
Route::get('/courses/{course}', [CourseController::class, 'edit']);
Route::post('/courses/{course}', [CourseController::class, 'update']);
Route::delete('/courses/delete/{course}', [CourseController::class, 'delete']);


Route::get('/trainees', [TraineeController::class, 'trainees'])->name('trainees');
Route::get('/trainees/create', [TraineeController::class, 'create', 'creates']);
Route::post('/trainees/create', [TraineeController::class, 'store']);
Route::get('/trainees/{trainee}', [TraineeController::class, 'edit']);
Route::post('/trainees/{trainee}', [TraineeController::class, 'update']);
Route::delete('/trainees/delete/{trainee}', [TraineeController::class, 'delete']);
