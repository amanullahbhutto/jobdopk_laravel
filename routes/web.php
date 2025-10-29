<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\JobDetailTwoController;
use App\Http\Controllers\EmployerDetailController;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/job-detail-two', [JobsController::class, 'jobDetailTwo']);
Route::get('/job-detail-two/{title}', [JobDetailTwoController::class, 'show'])->name('job-detail-two');


// Route::get('/employer-detail', [PagesController::class, 'employerDetail']);
// Route::get('/employer-detail/{company}', [EmployerDetailController::class, 'show'])->name('employer-detail');