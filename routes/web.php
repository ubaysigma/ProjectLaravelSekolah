<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/layout', function () {
    return view('layout');
});
Route::get('/Admin/dashboard', function () {
    return view('Admin.dashboard');
})->name('Admin.dashboard');
Route::get('/Admin/about', function () {
    return view('Admin.about');
})->name('Admin.about');
Route::get('/Admin/Student/index', function () {
    return view('Admin.Student.index');
})->name('Admin.Student.index');
