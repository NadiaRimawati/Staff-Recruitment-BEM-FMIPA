<?php


use Illuminate\Support\Facades\Route;
use app\Http\Controllers\LoginController;

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
Route::get('/login', function () {
    return view('login');
});
Route::get('/regis', function () {
    return view('regis');
});

Route::get('/information', function () {
    return view('information');
});
Route::get('/formregis', function () {
    return view('formregis');
});
Route::get('/regis', function () {
    return view('regis');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/documentation', function () {
    return view('documentation');
});

Route::get('/home', function () {
    return view('home');
});

    