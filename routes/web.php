<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', UserController::class);

Route::resource('abouts', AboutController::class);

Route::resource('skills', SkillsController::class);

Route::resource('education', EducationController::class);

Route::resource('experience', ExperienceController::class);

Route::resource('seminars', SeminarController::class);

Route::resource('blogs', BlogController::class);

Route::resource('contacts', ContactController::class);

Route::resource('/', FrontendController::class);

Route::middleware(['checkRole:admin'])->group(function () {
    Route::resource('users', UserController::class);
    
    
    });

