<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NurseryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('nursery.index');
});
Route::get('/home', function () {
    return view('nursery.home');
});
Route::get('/courses', function () {
    return view('nursery.courses');
});
Route::get('/about', function () {
    return view('nursery.about');
});
Route::get('/pricing', function () {
    return view('nursery.prices');
});
Route::get('/galary', function () {
    return view('nursery.galary');
});
Route::get('/contact', function () {
    return view('nursery.contact');
});

//Route::get('/teacher', function () {
    //return view('nursery.teacher');
//});
Route::get('/login', function () {
    return view('login');
});

Route::get('/teacher',[NurseryController::class,'create']);