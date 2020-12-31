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
Route::get('/','PagesController@index');
Route::get('/about/staff','PagesController@staff');
Route::get('/about/school','PagesController@aboutSchool');
Route::get('/calender','PagesController@calender');
Route::get('/announcements','PagesController@announcements');
Route::get('/announcement','PagesController@announcement');
Route::get('/dashboard','DashboardControl@dashboard');
Route::get('/view/announcement','DashboardControl@dashboard');
Route::get('/view/calender','DashboardControl@viewCalender');
Route::get('/view/member','DashboardControl@viewMember');
Route::get('/view/message','DashboardControl@viewMessage');

Route::get('/add/announcement','DashboardControl@addAnnouncement');
Route::get('/add/member','DashboardControl@addMember');
Route::get('/add/event','DashboardControl@addEvent');

Route::resource('posts','PostsController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
/*messages*/
Route::get('dashboard/announcement','AnnouncementsControl@index');
Route::post('/announcement','AnnouncementsControl@store')->name('announcement.store');
