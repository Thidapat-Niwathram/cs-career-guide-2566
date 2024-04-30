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

Route::get('/editcourse', function () {
    return view('admin\editcourse');
})->name('editcourse');

Route::get('/viewcourse', function () {
    return view('admin\viewcourse');
})->name('viewcourse');

Route::get('/viewsoftsk', function () {
    return view('admin\viewsoftsk');
})->name('viewsoftsk');

Route::get('/editsoftskill', function () {
    return view('admin\editsoftskill');
})->name('editsoftskill');

Route::get('/editsoftskcourse', function () {
    return view('admin\editsoftskcourse');
})->name('editsoftskcourse');

Route::get('/addsoftskill', function () {
    return view('admin\addsoftskill');
})->name('addsoftskill');

Route::get('/addhardskill', function () {
    return view('admin\addhardskill');
})->name('addhardskill');

Route::get('/addcourse', function () {
    return view('admin\addcourse');
})->name('addcourse');

Route::get('/courseaddsoftsk', function () {
    return view('admin\courseaddsoftsk');
})->name('courseaddsoftsk');

Route::get('/courseaddhardsk', function () {
    return view('admin\courseaddhardsk');
})->name('courseaddhardsk');

Route::get('/addcourseofsk', function () {
    return view('admin\addcourseofsk');
})->name('addcourseofsk');

Route::get('/addcareersoftsk', function () {
    return view('admin\addcareersoftsk');
})->name('addcareersoftsk');

Route::get('/editsoftskcourse', function () {
    return view('admin\editsoftskcourse');
})->name('editsoftskcourse');

Route::get('/editsoftskcareer', function () {
    return view('admin\editsoftskcareer');
})->name('editsoftskcareer');

Route::get('/addcourseofsk', function () {
    return view('admin\addcourseofsk');
})->name('addcourseofsk');

Route::get('/addcareerofsk', function () {
    return view('admin\addcareerofsk');
})->name('addcareerofsk');

Route::get('/addcourseofhk', function () {
    return view('admin\addcourseofhk');
})->name('addcourseofhk');

Route::get('/addcareerofhk', function () {
    return view('admin\addcareerofhk');
})->name('addcareerofhk');

Route::get('/addstd', function () {
    return view('admin\addstd');
})->name('addstd');

Route::get('/careerdetail', function () {
    return view('careerdetail');
})->name('careerdetail');

Route::get('/stdquestion', 'QuestionStdController@showForm')->name('stdquestion.form');
Route::post('/stdquestion', 'QuestionStdController@submitForm')->name('stdquestion.submit');


