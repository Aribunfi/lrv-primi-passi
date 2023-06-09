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
    $title = "Hello world!";
    return view('home', compact('title'));
});


Route::get('/author', function () {
    return view('author');
})->name('author');


Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');