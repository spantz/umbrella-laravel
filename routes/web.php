<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Http\MiddelWare\VerifyAPIToken;

Route::group(['middleware' => 'web'], function() {
	Route::get('/', 'HomeController@index');

	Route::group(['prefix' => '/api/v1'], function() {
		Route::post('/login', 'API\CredentialController@login');
		Route::post('/register', 'API\CredentialController@registerUser');

		Route::group(['middleware' => VerifyAPIToken::class], function () {
			Route::delete('/logout', 'API\CredentialController@logout');
		});
	});
});

Route::get('/', function () {
    return view('welcome');
});
