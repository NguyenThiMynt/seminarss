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
//login
Route::get('admin/login', function () {
    return view('login.index');
});
//trang admin
Route::get('admintl2/main', function () {
    return view('admin.main');
});
//calendar
Route::get('calendar/index', function () {
    return view('calendar.index');
});
Route::get('calendar/create', function () {
    return view('calendar.create');
});
//customer
Route::get('customer/index', function () {
    return view('customers.index');
});
Route::get('customer/create', function () {
    return view('customers.create');
});
//message
Route::get('chat/index', function () {
    return view('chats.index');
});
Route::get('chat/create', function () {
    return view('chats.create');
});
//blog
Route::get('blog/index', function () {
    return view('blogs.index');
});
Route::get('blog/create', function () {
    return view('blogs.create');
});
