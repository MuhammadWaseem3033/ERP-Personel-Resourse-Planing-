<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ItemController;
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
//
Route::controller(CompanyController::class)->middleware('auth')->group(function(){
    Route::get('/company','index')->name('company.index');
    Route::get('/company-create','create')->name('company.create');
    Route::post('/company-store','store')->name('company.store');
    Route::get('/company-show/{id}','show');
    Route::get('/company-edit/{company}','edit')->name('company.edit');
    Route::get('/company-delete/{id}','delete')->name('company.delete');
    Route::patch('/company-update/{company}','update')->name('company.update');
});
Route::controller(ItemController::class)->middleware('auth')->group(function(){
    Route::get('/item','index')->name('item.index');
    Route::get('/item-form','form')->name('item.form');
    Route::get('/item-delete/{id}','delete')->name('item.delete');
});
Route::controller(DocumentController::class)->middleware('auth')->group(function(){
    Route::get('/document/{type}','index')->name('document.index');
    Route::get('/document-form/{type}','create')->name('document.create');
    Route::post('/document-store','store')->name('document.store');
    Route::get('/document-show/{id}','show');
    Route::get('/document-edit/{document}','edit')->name('document.edit');
    Route::get('/document-delete/{id}','delete')->name('document.delete');
    Route::patch('/document-update/{document}','update')->name('document.update');
   });
