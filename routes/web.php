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
Route::get('/', 'FrontendController@index') ;
Route::get('/hotel-list', 'FrontendController@hotelList') ;
Route::get('/room/list/{id}', 'FrontendController@roomList') ;
Route::get('/room-details/{id}', 'FrontendController@roomDetails') ;
Route::post('/room/booking/', 'FrontendController@bookingStore') ;
Route::get('/about/', 'FrontendController@about') ;
Route::get('/contact/', 'FrontendController@contact') ;
Auth::routes();

Route::get('/admin', 'HomeController@index') ;


/*
admin
*/
//Route::get('/dashboard', 'HomeController@index') ;

//room
Route::get('/room/create', 'RoomController@create') ;
Route::get('/room/', 'RoomController@index') ;
Route::post('/room/save', 'RoomController@store') ;
Route::get('/room/edit/{id}', 'RoomController@edit') ;
Route::post('/room/update', 'RoomController@update') ;
Route::get('/room/destroy/{id}', 'RoomController@destroy') ;
//room

//hotel
Route::get('/hotel/create', 'RoomController@hotelCreate') ;
Route::post('/hotel/save', 'RoomController@hotelStore') ;
Route::get('/hotel/', 'RoomController@hotelIndex') ;
Route::get('/hotel/delete/{id}', 'RoomController@delete') ;
//hotel
//booking info
Route::get('/booking-info', 'RoomController@bookingInfo') ;
Route::get('/booking/destroy/{id}', 'RoomController@bookingDestroy') ;
Route::post('/booking/confirm', 'RoomController@bookingConfirm') ;

//booking info
Route::get('/customer/add', 'CustomerController@createCustomer') ;
Route::post('/customer/save', 'CustomerController@storeCustomer') ;
Route::get('/customer/manage', 'CustomerController@manageCustomer') ;
Route::get('/customer/edit/{id}', 'CustomerController@editCustomer') ;
Route::post('/customer/update', 'CustomerController@updateCustomer') ;
Route::get('/customer/delete/{id}', 'CustomerController@deleteCustomer') ;
Route::get('/customer/view/{id}', 'CustomerController@viewCustomer') ;


/*
Payment
*/
Route::get('/payment/add', 'PaymentController@createPayment') ;
Route::post('/payment/save', 'PaymentController@storePayment') ;
Route::get('/payment/manage', 'PaymentController@managePayment') ;
Route::get('/payment/edit/{id}', 'PaymentController@editPayment') ;
Route::post('/payment/update', 'PaymentController@updatePayment') ;
Route::get('/payment/delete/{id}', 'PaymentController@deletePayment') ;