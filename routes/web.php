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
Route::get('/hello',[lists::class,'index']);
/*Route::get('/getdata',function(){
    return $data=["hello","hi",];
});*/
Route::post('/savedata',[lists::class,'save']);