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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tempat', function () {
    return view('admin/tempat');
});
Route::get('/tambah', function () {
    return view('admin/add');
});
Route::get('/user', function () {
    return view('user/daftartempat');
});
Route::get('/detail', function () {
    return view('admin/detail');
});
Route::get('/map', function () {
    return view('admin/map');
});


