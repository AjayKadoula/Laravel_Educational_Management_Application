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
    return view('welcome');
});
Route::get('/studentregistration', function () {
    return view('auth.studentregistration');
});
Route::post('/Registration_store','UserController@store');
Route::get('/studentregistration2', function () {
    return view('auth.studentregistration2');
});
Route::post('/Registration_store2','UserParentsController@store');
Route::get('/studentregistration3', function () {
    return view('auth.studentregistration3');
});
Route::post('/Registration_store3','UserController@store2');

Route::get('/studentregistration4','UserController@notificationmail');

Route::post('/Registration_store4','UserController@store3');
Route::get('/studentregistrationStatus', function () {
    return view('auth.studentregistraionStatus',['query'=>'']);
});
Route::post('/Registration_store_5','UserController@check');
Route::post('/home/admin','admincontroller@admin');

Route::get('/home/admin', function () {
    return view('Admin');
});
Route::post('/home/admin/delete','admincontroller@delete');
Route::get('/home/admin_registration', function () {
    return view('auth.admin_registration');
});
Route::post('/home/admin_registration','admincontroller@admin_registration');

Route::post('/home/teacher','admincontroller@teacher');
Route::get('/home/teacher_registration', function () {
    return view('auth.teacher_registration');
});
Route::post('/home/teacher_registration','admincontroller@teacher_registration');
Route::post('/home/teacher/delete','admincontroller@teacher_delete');
Route::get('/home/calender', function () {
    return view('calender');
});
Route::get('/home/notifications','admincontroller@notifiaction');
Route::post('/home/notifications','admincontroller@notifiaction');
Route::post('/home/notifications/Create_New_Notifiactions','admincontroller@notifiaction_create');

Route::get('/home/message','admincontroller@message');
Route::post('/home/message','admincontroller@message');
Route::post('/home/messageShow','admincontroller@messageShow');
Route::get('/home/messageShow','admincontroller@messageShow');
Route::post('/home/message/send_message','admincontroller@message_send');
Route::get('/home/message/send_message','admincontroller@message_send');


Route::get('/home/fees','admincontroller@fees');
Route::post('/home/fees','admincontroller@fees');
Route::post('/home/fees/create','admincontroller@feescreate');
Route::get('/home/fees/create','admincontroller@feescreate');
Route::post('/home/fees/new_fees_create','admincontroller@new_fees_create');
Route::get('/home/fees/new_fees_create','admincontroller@new_fees_create');
Route::post('/home/fees/new_fees_create1','admincontroller@new_fees_create1');
Route::get('/home/fees/new_fees_create1','admincontroller@new_fees_create1');
Route::get('/home/fees/pending','admincontroller@message');
Route::post('/home/fees/pending','admincontroller@message');


Route::get('/home/download', function () {
    return view('download');
});
Route::get('/home/report', function () {
    return view('report');
});
Route::get('/home/chart', function () {
    return view('chart');
});
Route::get('/home/activity-feed', function () {
    return view('activity-feed');
});
Route::get('/home/typography', function () {
    return view('typography');
});
Route::post('/home/gallery','admincontroller@admingallery');
Route::get('/home/gallery','admincontroller@admingallery');
Route::get('/home/icon', function () {
    return view('icon');
});


Route::post('/home/student','admincontroller@student');
Route::get('/home/student', function () {
    return view('Adminstudent');
});
Route::post('/home/student/userdelete','admincontroller@userdelete');
Route::get('/home/student/userdelete','admincontroller@userdelete');
Route::post('/home/student/delete','admincontroller@studentuserdelete');
Route::get('/home/student/delete','admincontroller@studentuserdelete');
Route::post('/home/student/Pending/delete','admincontroller@studentdelete');
Route::get('/home/student/Pending/delete','admincontroller@studentdelete');
Route::get('/home/student/Pending','admincontroller@studentpending');
Route::post('/home/admin/studentdocument','admincontroller@studentdoc');
Route::get('/home/admin/studentdocument','admincontroller@studentdoc');
Route::post('/home/admin/studentdocument1','admincontroller@studentdoc1');
Route::get('/home/admin/studentdocument1','admincontroller@studentdoc1');
Route::post('/home/admin/accept','admincontroller@accept');
Route::get('/home/admin/accept','admincontroller@accept');

Route::get('/home/parents', function () {
    return view('Adminparents');
});
Route::post('/home/parents','admincontroller@parents');
Route::post('/home/parents/parentsdelete','admincontroller@parentsuserdelete');
Route::post('/home/parents/delete','admincontroller@parentsuserdelete');
Route::get('/home/parents/Pending','admincontroller@parentspending');
Route::post('/home/parents/Pending/delete','admincontroller@parentsdelete');
Route::post('/home/parents/accept','admincontroller@parentsaccept');

Route::get('/home/student/notifications','StudentController@notifiaction');
Route::post('/home/student/notifications','StudentController@notifiaction');
Route::get('/home/student/message','StudentController@message');
Route::post('/home/student/message','StudentController@message');
Route::get('/home/student/messageShow','StudentController@messageShow');
Route::post('/home/student/messageShow','StudentController@messageShow');
Route::get('/home/student/message/send_message','StudentController@message_send');
Route::post('/home/student/message/send_message','StudentController@message_send');

Route::get('/home/parents/notifications','ParentsController@notifiaction');
Route::post('/home/parents/notifications','ParentsController@notifiaction');
Route::get('/home/parents/message','ParentsController@message');
Route::post('/home/parents/message','ParentsController@message');
Route::get('/home/parents/messageShow','ParentsController@messageShow');
Route::post('/home/parents/messageShow','ParentsController@messageShow');
Route::get('/home/parents/message/send_message','ParentsController@message_send');
Route::post('/home/parents/message/send_message','ParentsController@message_send');

Route::get('/home/teacher/notifications','TeacherController@notifiaction');
Route::post('/home/teacher/notifications','TeacherController@notifiaction');
Route::get('/home/teacher/message','TeacherController@message');
Route::post('/home/teacher/message','TeacherController@message');
Route::get('/home/teacher/messageShow','TeacherController@messageShow');
Route::post('/home/teacher/messageShow','TeacherController@messageShow');
Route::get('/home/teacher/message/send_message','TeacherController@message_send');
Route::post('/home/teacher/message/send_message','TeacherController@message_send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
