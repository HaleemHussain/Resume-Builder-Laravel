<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserDetailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('user-detail', UserDetailController::class)->middleware('auth');

Route::resource('education', EducationController::class)->middleware('auth');

Route::resource('experience', ExperienceController::class)->middleware('auth');

Route::resource('skill', SkillController::class)->middleware('auth');

Route::get('resume', [ResumeController::class, 'index'])->middleware('auth')->name('resume.index');

Route::get('resume/download', [ResumeController::class, 'download'])->middleware('auth')->name('resume.download');

Route::get('/preview', function () {return view('preview');})->name('preview');;

