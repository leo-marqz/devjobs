<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\VacanteController;
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

Route::get('/',HomeController::class)->name('home');

Route::get('/dashboard',[VacanteController::class, 'index'])->middleware(['auth', 'verified', 'rol.recruiter'])->name('vacancies.index');
Route::get('/vacancies/create',[VacanteController::class, 'create'])->middleware(['auth', 'verified'])->name('vacancies.create');
Route::get('/vacancies/{vacancy}/edit',[VacanteController::class, 'edit'])->middleware(['auth', 'verified'])->name('vacancies.edit');
Route::get('/vacancies/{vacancy}',[VacanteController::class, 'show'])->name('vacancies.show');

Route::get('/candidates/{vacancy}',[CandidateController::class, 'index'])
    ->name('candidates.index');

Route::get('/notifications', NotificationController::class)
    ->middleware('auth', 'verified', 'rol.recruiter')
    ->name('notifications');

require __DIR__.'/auth.php';
