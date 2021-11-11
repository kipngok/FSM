<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
//     Route::resource('category','App\Http\Controllers\CategoryController');
//     Route::resource('survey','App\Http\Controllers\SurveyController');
//     Route::resource('location','App\Http\Controllers\locationController');
//     // Route::resource('surveyTaking','App\Http\Controllers\SurveyTakingController');
//     Route::resource('user','App\Http\Controllers\UserController');
//     Route::resource('section','App\Http\Controllers\SectionController');
//     Route::get('getLocations', 'App\Http\Controllers\SurveyController@getLocations');

// });

	Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
	});
	Route::post('/register',"App\Http\Controllers\RegisterController@register");
	Route::post('/login',"App\Http\Controllers\LoginController@login");
	Route::post('/logout',"App\Http\Controllers\LoginController@logout");

    // Route::middleware('api')->group(function () {
    Route::resource('category', 'App\Http\Controllers\CategoryController');
    Route::resource('section', 'App\Http\Controllers\SectionController');
    Route::resource('location', 'App\Http\Controllers\LocationController');
    Route::resource('survey','App\Http\Controllers\SurveyController');
    Route::get('getLocation', 'App\Http\Controllers\SurveyController@getLocations');


    // i will fetch auth user
    Route::get('getUser', 'App\Http\Controllers\SurveyTakingController@getUser');
    Route::get('getSection', 'App\Http\Controllers\SurveyTakingControlle@getSection');
    Route::get('getCategory', 'App\Http\Controllers\SurveyTakingControlle@getCategory');
// });

