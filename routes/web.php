<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'home'], function() {

    Route::get('/', [ShopController::class, 'home']);

    Route::group(['prefix' => 'auth'], function() {
        Route::get('/sign-up', [ShopController::class, 'signupPage']);

        Route::post('/sign-up', [ShopController::class, 'signup']);

        Route::get('/sign-in', [ShopController::class, 'signinPage']);

        Route::post('/sign-in', [ShopController::class, 'signin']);

        Route::get('/sign-out', [ShopController::class, 'signout']);
    });
});
