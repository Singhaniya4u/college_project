<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Admins
Route::get('/admin-login', function(){
    return view('login.index');
})->name('login.index');

Route::get('admins/{admin_id}', [AdminController::class, 'index'])->name('admins.dashboard');




Route::get('home', function(){
    return view('home_page');
})->name('home');

Route::post('/login_check', [AdminController::class, 'login'])->name('login_check');

Route::get('/courses', function(){
    return view('courses');
})->name('courses');

Route::get('sliders', [SliderController::class, 'index']);
Route::resource('student', StudentController::class);
