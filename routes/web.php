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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UsersController');
Route::post('users/update', 'UsersController@update')->name('users.update');
Route::get('users/destroy/{id}', 'UsersController@destroy');

//Clients
Route::resource('clients', 'ClientsController');
Route::post('clients/update', 'ClientsController@update')->name('clients.update');
Route::get('clients/destroy/{id}', 'ClientsController@destroy');

//cases
Route::get('addCase', 'CasesController@getClients');
Route::resource('cases', 'CasesController');

//Mohdareen
Route::resource('mohdareen', 'MohdareenController');
Route::post('mohdareen/update', 'MohdareenController@update')->name('mohdareen.update');
Route::get('mohdareen/destroy/{id}', 'MohdareenController@destroy');
Route::get('mohdareen/updateStatus/{id}', 'MohdareenController@updateStatus');
Route::get('mohdareen-export', 'MohdareenController@export');

Route::get('/getClients', 'MohdareenController@getClients')->name('getClients');

//Case Details
Route::resource('caseDetails', 'CaseDetailsController');
Route::get('caseDetails/getSearchResult/{search}', 'CaseDetailsController@getSearchResult');
Route::post('caseDetails/update', 'CaseDetailsController@update')->name('caseDetails.update');
Route::get('caseDetails/showSessionData/{id}', 'CaseDetailsController@showSessionData');
Route::get('caseDetails/destroy/{id}', 'CaseDetailsController@destroy');
Route::get('caseDetails/updateStatus/{id}', 'CaseDetailsController@updateStatus');
Route::get('caseDetails/getSessionNotes/{id}', 'CaseDetailsController@getSessionNotes');
