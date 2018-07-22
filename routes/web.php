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

Auth::routes();

Route::get('new_ticket', 'TicketsController@create')->middleware('auth');
Route::post('new_ticket', 'TicketsController@store');

Route::post('comment', 'CommentsController@postComment');

Route::get('my_tickets', 'TicketsController@userTickets');
Route::get('tickets/{ticket_id}', 'TicketsController@show');
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'is_admin'], function() {
    Route::get('tickets', 'AdminController@index');
    Route::post('close_ticket/{ticket_id}', 'AdminController@close');
});