<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('auth', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'UsersController@getUsers');
    Route::get('/{id}', 'UsersController@getUserById');
});

Route::group(['prefix' => 'club'], function () {
    Route::get('/', 'ClubsController@getClubs');
    Route::get('/{id}', 'ClubsController@getClubById');
});
Route::group(['prefix' => 'work'], function () {
    Route::get('/', 'CompetitiveWorksController@getCompetitiveWorks');
    Route::get('/{id}', 'CompetitiveWorksController@getCompetitiveWorkById');
    Route::post('/register', 'CompetitiveWorksController@reg');
});
Route::group(['prefix' => 'route'], function () {
    Route::get('/', 'TouristRoutesController@getTouristRoutes');
    Route::get('/{id}', 'TouristRoutesController@getTouristRouteById');
});
Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', 'UsersController@login');
    Route::post('/registerat', 'UserController@reg');
    Route::get('/logout', 'UsersController@logout')->middleware('auth:api');
});
Route::post('/register', 'UserController@reg');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
