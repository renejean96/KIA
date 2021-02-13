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

/*

    Route::get('/', function () {
        return view('welcome');
    });

    ---------to call a page----------
    Route::get('/hello', function () {
        //return view('welcome');
        return '<h1>Hello world</h1>';
    });
    ---------------to give id your page---------------
    Route::get('/user/{id}/{name}',function($id,$name){
        return 'this is user:'.$id.'and name:'.$name;
    });


-----------my routes-----------
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::resource('posts','PostsController');

*/
Route::get('/','\PagesController@index');
Route::get('/about/staff','\PagesController@staff');
Route::get('/about/school','\PagesController@aboutSchool');
Route::get('/calendar','\PagesController@calender');
Route::get('/contact','\PagesController@contact');
Route::get('/registration','\PagesController@registration');
Route::get('/announcements','\PagesController@announcements');
Route::get('/announcement/{id}','\PagesController@announcement');
Route::get('/dashboard','\DashboardControl@dashboard');
Route::get('/view/announcement','\DashboardControl@dashboard');
Route::get('/view/calendar','\CalendarController@index');
Route::get('/view/member','\StaffController@index');
Route::get('/view/message','\MessagesControl@index');

Route::get('/print/test','\PDFController@printForm');
Route::get('/add/announcement','\DashboardControl@addAnnouncement');
Route::get('/add/member','\DashboardControl@addMember');
Route::get('/add/event','\DashboardControl@addEvent');

Route::get('/download/document/{id}','\PupilController@printForm');

Route::resource('posts','\PostsController');
Route::resource('events','\CalendarController');
Route::resource('staff','\StaffController');
Route::resource('pupil','\PupilController');

Route::get('/events/delete/{id}', '\CalendarController@destroy')
     ->name('events.destroy');

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
/*announcement*/
Route::get('/add/announcement','\AnnouncementsControl@create');
Route::post('store','AnnouncementsControl@store');
Route::get('/announcement/delete/{id}', 'AnnouncementsControl@destroy')
     ->name('announcement.destroy');

/*messages*/
Route::post('/save','PagesController@save');
Route::get('/message/delete/{id}', 'MessagesControl@destroy')
     ->name('message.destroy');

Auth::routes();

Route::get('/dashboard', 'DashboardControl@index')->name('dashboard.index');
