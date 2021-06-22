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

Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function() {

    Route::get("/movies", "MoviesController@listMovies");
    Route::get("/movies/{id}", "MoviesController@movieDetails");
    Route::post("/login", "LoginController@login");
    Route::post("/register", "RegisterController@register");

    Route::group(['middleware' => 'auth:api'], function () {
        Route::put("/movie/{id}/comment/new", "MoviesController@newComment");
        Route::post("/movie/new", "MoviesController@newMovie");
        Route::get('/logout', 'LogoutController@logout');
    });

});
