<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReportController;




Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::resource('users','UserController');
Route::get('/export-csv', [ReportController::class,'exportCsv'])->name('export-csv');
Route::get('/report',[ReportController::class,'report'])->name('report');
