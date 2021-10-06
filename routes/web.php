<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/login', function () {
    return view('login.index');
});

Route::get('/', function () {
    return view('pages.index');
});


Route::get('/index1', function () {
    return view('layouts.main');
});

Route::get('/index2', function () {
    return view('pages.index2');
});
Route::get('/index3', function () {
    return view('pages.index3');
});
Route::get('/index4', function () {
    return view('pages.index4');
});
Route::get('/index5', function () {
    return view('pages.index5');
});
Route::get('/index6', function () {
    return view('pages.index6');
});