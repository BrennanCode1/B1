<?php

use Illuminate\Support\Facades\Route;
use App\Models\Api;
use App\Http\Controllers\ApiController;


///Route::get('/', [ApiController::class,'displayNews']);
///Route::get('/fetchNewsFromSource', [ApiController::class, 'fetchNewsFromSource'])->name('fetchNewsFromSource');
///Route::post('/sourceId', 'ApiController@displayNews');
///Route::get('/', 'App\Http\Controllers\ApiController@displayNews');
////Route::post('/sourceId', 'App\Http\Controllers\ApiController@displayNews');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('dashboard', 'App\Http\Controllers\ApiController@displayNews');
    Route::post('Api/{sourceId}', 'App\Http\Controllers\ApiController@displayNews');
        return view('dashboard');
});

Route::get('/', function () {
    return view('welcome');
});
Route:: get('ApiController/{page}','App\Http\Controllers\ApiController@displayNews');

///Route::get('/dashboard', [App\Http\Controllers\ApiController::class,'displayNews'])->name('dashboard');;
///Route::post('sourceId',[App\Http\Controllers\ApiController::class,'displayNews'])->name('dashboard');;
///Route::middleware(['auth:sanctum', 'verified'])->group(function () {
 ///   Route::get('/', 'App\Http\Controllers\ApiController@displayNews');
  ///  Route::post('Api/{sourceId}', 'App\Http\Controllers\ApiController@displayNews');
///})->name('dashboard');

///Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
///    return view('dashboard'
///);
///})->name('dashboard');