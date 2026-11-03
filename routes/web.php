<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
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
Route::get('/Admin/dashboard', [DashboardController::class, 'admindashboard'])->name('Admin.dashboard');
Route::get('/Admin/about', [AboutController::class, 'adminabout'])->name('Admin.about');
Route::get('/Admin/Student', [StudentController::class, 'index'])->name('Admin.Student.index');
Route::get('/Admin/Classroom', [ClassroomController::class, 'index'])->name('Admin.Classroom.classroom');
Route::get('/Admin/Teacher', [TeacherController::class, 'index'])->name('Admin.Teacher.index');
Route::get('/Admin/Subject', [SubjectController::class, 'index'])->name('Admin.Subject.index');
