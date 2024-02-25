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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/qt', function () {
    return view('question');
})->name('question');

Route::get('/qtstd', function () {
    return view('student/questionstd');
})->name('questionstd');

Route::get('/career', function () {
    return view('student/careerdetail');
})->name('careerdetail');
//Route::get('/menu', function () {
//    return view('student/menustudent');
//})->name('menustudent');
Route::get('/homestd', function () {
    return view('student/homestudent');
})->name('homestudent');

Route::get('/homestd1', function () {
    return view('student\homstudent1');
})->name('homestudent1');

Route::get('/skillstd', function () {
    return view('student\skillstudent');
})->name('skillstudent');

Route::get('/editinfo', function () {
    return view('student\editinfo');
})->name('editinfo');

Route::get('/grade', function () {
    return view('student\grade');
})->name('grade');
