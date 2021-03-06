<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('clothing', 'WelcomeController@showClothing');
Route::get('gifting', 'WelcomeController@showGifting');

Route::get('home', 'HomeController@index');

Route::get('getstarted', 'WelcomeController@showForm');
Route::get('thanks', 'WelcomeController@showThanks');

Route::post('logouploads', 'AjaxUploadController@logoImageUploads');
Route::post('brandinguploads', 'AjaxUploadController@brandFileUploads');

Route::post('briefs', ['as' => 'postbriefs', 'uses' => 'BriefsController@postBriefs']);
Route::post('contactmessage', 'ContactFormController@receiveMessage');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
