<?php

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\MiddelWare\VerifyAPIToken;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('login', 'API\CredentialController@login');
Route::get('register', 'API\CredentialController@registerUser');
Route::get('logout', 'API\CredentialController@logout');


// Route::get('/home', 'HomeController@index');

/*Route::group(['middleware' => 'auth'], function() {
		Route::group(['middleware' => VerifyAPIToken::class], function () {
			Route::get('/logout', 'API\CredentialController@logout');
		});
});*/