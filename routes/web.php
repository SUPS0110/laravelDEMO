<?php

use App\Http\Controllers\lists;
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

Route::get('/table',[lists::class,'index']);

Route::post('/savedata',[lists::class,'save']);
Route::get('/edit/{id}',[lists::class,'edit']);

Route::post('/update-data', [lists::class, 'update']);
Route::get('/delete/{id}',[lists::class,'delete']);
