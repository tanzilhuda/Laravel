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

//Logout
Route::get('/logout', 'AdminController@logout');


Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function () {
    return view('/admin.admin_login');
});

//Admin Login
Route::post('/adminlogin', 'AdminController@login_dashboard');

//Student Login
Route::post('/studentlogin', 'AdminController@student_login_dashboard');

//Student Dashboard
Route::get('/student_dashboard', 'AdminController@student_dashboard');

Route::get('/admin_dashboard', 'AdminController@admin_dashboard');
Route::get('/viewprofile', 'AdminController@viewprofile');
Route::get('/setting', 'AdminController@setting');

//add Student
Route::get('/addstudent', 'AddstudentsController@addstudent');

//Save Student
Route::post('/save_student', 'AddstudentsController@savestudent');

//Delete Student data
Route::get('/student_delete/{student_id}', 'AllstudentsController@studentdelete');

//View Student
Route::get('/student_view/{stuednt_id}', 'AllstudentsController@studentview');

//Edit Student
Route::get('/student_edit/{stuednt_id}', 'AllstudentsController@studentedit');

//Update Student
Route::post('/update_student/{stuednt_id}', 'AllstudentsController@studentupdate');

//Add teacher
Route::get('/addteacher', 'TeacherController@addteacher');

//Save Teacher
Route::post('/save_teacher', 'TeacherController@saveteacher');

//All Teacher
Route::get('/allteacher', 'TeacherController@allteacher');

//Delete Teachers data
Route::get('/teacher_delete/{teachers_id}', 'TeacherController@teacherdelete');

//View Teacher
Route::get('/teacher_view/{teacher_id}', 'TeacherController@teacherview');

//Edit Teacher
Route::get('/teacher_edit/{teacher_id}', 'TeacherController@teacheredit');

//Update Teacher
Route::post('/update_teacher/{teacher_id}', 'TeacherController@teacherupdate');

//All Student
Route::get('/allstudent', 'AllstudentsController@allstudent');
Route::get('/tutionfee', 'TutionController@tution');
Route::get('/cse', 'CSEController@cse');
Route::get('/ece', 'ECEController@ece');
Route::get('/bba', 'BBAController@bba');
Route::get('/eee', 'EEEController@eee');
Route::get('/mba', 'MBAController@mba');

Route::get('/allteacher', 'TeacherController@allteacher');

//Student Profile (Individual)
Route::get('/student_profile', 'AllstudentsController@studentprofile');

//Student Setting (Individual)
Route::get('/student_setting', 'AdminController@studentsetting');

//Update Student Individual
Route::post('/student_own_update', 'AllstudentsController@studentownupdate');

//Student Logout
Route::get('/student_logout', 'AdminController@student_logout');