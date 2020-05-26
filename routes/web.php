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
    return view('auth.login');
});

Auth::routes();
Route::get('/client', function(){
	return view('client.index');
})->middleware('client')->name('client.index');
Route::get('/consultant', function(){
	return view('consultant.index');
})->middleware('consultant')->name('consultant.index');
// Route::get('/home', 'HomeController@index')->name('home');

// Manage Profile Routes
Route::resource('/client/profile','Client\ProfileController', ['as'=>'client']);
Route::resource('/consultant/profile','Consultant\ProfileController', ['as'=>'consultant']);

// Manage CV Route
Route::resource('/consultant/CV','Consultant\CVController', ['as'=>'consultantCV']);
Route::post('consultant/CV/{id}/update','Consultant\CVController@update')->name('updateCVConsuntant');
// Route::post ('/CVs',"Consultant\CVController@store");
Route::get('/client/opportunity', function() {
	return view('client.opportunity.index');
});




