<?php

use App\Http\Controllers\CompanyController;
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

Route::get('/', function () {return view('welcome');});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::controller(CompanyController::class)->group(function(){
    Route::get('/company','index')->name('company.index');
    Route::get('/company-create','create')->name('company.create');
    Route::post('/company-store','store')->name('company.store');
    Route::get('/company-show/{id}','show');
    Route::get('/company-edit/{id}','edit');
    Route::get('/company/{id}','update');
});
