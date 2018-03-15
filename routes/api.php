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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
Route::get('/airports', function(){

});


Route::resource('/v1/flights', v1\FlightController::class, [
    'except' => ['create', 'edit']
]);


    // List airports
    Route::get('/airports', 'AirportController@index');

// List single airport
    Route::get('airport/{id}', 'AirportController@show');

    // Update airport
    Route::put('airport', 'AirportController@store');

    // Create new airort
    Route::post('airport', 'AirportController@store');  

    //delete a single airport
    Route::delete('airport/{id}', 'AirportController@destroy');





    // List airports
 Route::get('flights', 'FlightController@index');

// Create new flight
Route::post('flight', 'FlightController@store');

// Update flight
Route::put('flight', 'FlightController@store');

// Removeflight from itinary
Route::delete('flight/{id}', 'FlightController@destroy');



