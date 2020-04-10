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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Stefa
Route::group(['prefix' => 'v1'], function (){
    Route::group(['prefix' => 'invoices'], function (){
        Route::get('', 'InvoiceController@index');
        Route::get('{id}', 'InvoiceController@show');
        Route::post('', 'InvoiceController@store');
        Route::put('{id}', 'InvoiceController@update');
        Route::delete('{id}', 'InvoiceController@destroy');
    });
});