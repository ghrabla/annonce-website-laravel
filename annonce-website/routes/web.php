<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnounceController;
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



Route::resource('anounces', AnounceController::class);

Route::middleware('auth','verified')->get('/', function () {
    return view('layouts/app');
});

Route::get('add-anounce', [AnounceController::class, 'create']);
Route::post('add-anounce', [AnounceController::class, 'store']);
Route::get('/', [AnounceController::class, 'index']);
Route::delete('delete-anounce/{id}', [AnounceController::class, 'destroy']);
Route::get('edit-anounce/{id}', [AnounceController::class, 'edit']);
Route::put('update-anounce/{id}', [AnounceController::class, 'update']);
// Route::post('search', [AnounceController::class,'search']);






