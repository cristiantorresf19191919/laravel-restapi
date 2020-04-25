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

/* Route::api('/question','QuestionController@index'); */
Route::apiResource('/question','QuestionController');

Route::apiResource('/category','CategoryController');

Route::apiResource('/question/{question}/reply','ReplyController');

Route::apiResource('/category','CategoryController');

Route::post('/like/{reply}','LikeController@likeIt');
Route::delete('/like/{reply}','LikeController@unlikeIt');

Route::group(['prefix' => 'auth'], function () {
    Route::post('login','AuthController@login');
    Route::post('logout','AuthController@logout');
    Route::post('refresh','AuthController@refresh');
    Route::post('me','AuthController@me');
    Route::post('payload','AuthController@payload');
    Route::post('signup','AuthController@signup');

    
});
