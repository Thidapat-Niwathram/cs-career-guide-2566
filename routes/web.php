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

//Route::get('/qt', function () {
//    return view('question');
//})->name('question');

Route::get('/qtstd', function () {
    return view('student/questionstd');
})->name('questionstd');

Route::get('/courseguide', function () {
    return view('student/courseguide');
})->name('courseguide');
//Route::get('/menu', function () {
//    return view('student/menustudent');
//})->name('menustudent');
//Route::get('/homestd', function () {
//    return view('student/homestudent');
//})->name('homestudent');

Route::get('/homestd1', function () {
    return view('student\homestudent1');
})->name('homestudent1');

Route::get('/slcareer', function () {
    return view('student\slcareer');
})->name('slcareer');

//Route::get('/editinfo', function () {
//    return view('student\editinfo');
//})->name('editinfo');

Route::get('/grade', function () {
    return view('student\grade');
})->name('grade');

Route::get('/dashboard', function () {
    return view('admin\dashboard');
})->name('dashboard');

Route::get('/mnaccount', function () {
    return view('admin\mnaccount');
})->name('mnaccount');

Route::get('/mncareer', function () {
    return view('admin\mncareer');
})->name('mncareer');

Route::get('/mncourse', function () {
    return view('admin\mncourse');
})->name('mncourse');

Route::get('/mnsoftskill', function () {
    return view('admin\mnsoftskill');
})->name('mnsoftskill');

Route::get('/mntechskill', function () {
    return view('admin\mntechskill');
})->name('mntechskill');

Route::get('/mnhardskill', function () {
    return view('admin\mnhardskill');
})->name('mnhardskill');

Route::get('/qt2', function () {
    return view('student\question2');
})->name('question2');

Route::get('/qt3', function () {
    return view('student\question3');
})->name('question3');

Route::get('/qt4', function () {
    return view('student\question4');
})->name('question4');

Route::get('/viewcareer', function () {
    return view('admin\viewcareer');
})->name('viewcareer');

Route::get('/addcareer', function () {
    return view('admin\addcareer');
})->name('addcareer');

Route::get('/careeraddsoftsk', function () {
    return view('admin\careeraddsoftsk');
})->name('careeraddsoftsk');

Route::get('/careeraddhardsk', function () {
    return view('admin\careeraddhardsk');
})->name('careeraddhardsk');

Route::get('/editcareer', function () {
    return view('admin\editcareer');
})->name('editcareer');

Route::get('/editcareerhardsk', function () {
    return view('admin\editcareerhardsk');
})->name('editcareerhardsk');

Route::get('/editcareersoftsk', function () {
    return view('admin\editcareersoftsk');
})->name('editcareersoftsk');

Route::get('/editcoursehardsk', function () {
    return view('admin\editcoursehardsk');
})->name('editcoursehardsk');

Route::get('/editcoursesoftsk', function () {
    return view('admin\editcoursesoftsk');
})->name('editcoursesoftsk');

Route::get('/viewcourse', function () {
    return view('admin\viewcourse');
})->name('viewcourse');
