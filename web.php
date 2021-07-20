<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usertrack;
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


Route::get('/login',[usertrack::class,'login']);
Route::get('/dashboard',[usertrack::class,'dashboard']);       
Route::post('/dashboard2',[usertrack::class,'panel']);