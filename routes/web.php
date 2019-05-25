<?php

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
    return view('home');
});
Route::get('/tours', function () {
    return view('tours');
});
Route::get('/planner', function () {
    return view('planner');
});
Route::get('/trip', function () {
    return view('trip');
});