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

// index


/*
  Flight routes
*/

// Index
Route::get('/', [
  'uses' => 'FlightController@index',
  'as' => 'index'
]);

// Search flights
Route::get('/flight-list', [
  'uses' => 'FlightController@search',
  'as' => 'searchFlight'
]);

/*
  Booking page
*/
Route::get('/flight-book/{flight_id}', [
  'uses' => 'FlightBookingController@index',
  'as' => 'flightBooking'
]);

Route::post('/flight-book/{flight_id}', [
  'uses' => 'FlightBookingController@processBooking',
  'as' => 'processBooking'
])->middleware('auth');

/*
  Admin routes
*/
Route::get('admin/index', [
  'uses' => 'AdminController@index',
  'as' => 'admin.index'
])->middleware('admin');

Route::get('admin/manageFlights', [
  'uses' => 'AdminController@manageFlights',
  'as' => 'admin.manageFlights'
])->middleware('admin');

// Create flight
Route::get('/admin/flight/create', [
  'uses' => 'FlightController@create',
  'as' => 'admin.createFlight'
])->middleware('admin');

Route::post('/admin/flight/store', [
  'uses' => 'FlightController@store',
  'as' => 'admin.storeFlight'
])->middleware('admin');
/*
  User routes
*/
Auth::routes();
Route::get('user/update', 'Auth\UserController@index')->name('user.update');
Route::post('user/update', 'Auth\UserController@update')->name('user.update');
Route::get('user/manageFlightBooks', 'Auth\UserController@manageFlightBooks')->name('user.manageFlightBooks');
Route::get('user/detailsFlightBook/{flight_book_id}', 'Auth\UserController@detailsFlightBook')->name('user.detailsFlightBook');
Route::get('user/deleteFlightBook/{flight_book_id}', 'Auth\UserController@deleteFlightBook')->name('user.deleteFlightBook');
Route::get('/home', 'HomeController@index')->name('home');
