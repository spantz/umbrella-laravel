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

// Route::get('/home', 'HomeController@index');

// Route::group(['middleware' => 'auth'], function() {
// 	Route::get('/', 'HomeController@index');

// 	Route::group(['prefix' => '/api/v1'], function() {
// 		Route::post('/login', 'API\CredentialController@login');
// 		Route::post('/register', 'API\CredentialController@registerUser');

// 		Route::group(['middleware' => VerifyAPIToken::class], function () {
// 			Route::delete('/logout', 'API\CredentialController@logout');
// 		});
// 	});
// });