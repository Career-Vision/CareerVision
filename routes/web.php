<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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


Route::get('/',[PostController::class,'index']);

Route::get('/reservation',function() {
    return view('ajax-load/reservation-form');
});


Route::get('/tenthscience',function() {
    return view('FrontEnd/tenthscience');
});

Route::get('/tenthcom',function() {
    return view('FrontEnd/tenthcom');
});

Route::get('/tentharts',function() {
    return view('FrontEnd/tentharts');
});

Route::get('/login',function() {
    return view('FrontEnd/login');
});
Route::get('/signup',function() {
    return view('FrontEnd/signup');
});




