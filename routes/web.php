<?php

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

/***************************BACK-END*****************************/
// Login page
/**
 * @todo: add login, register view, processLogin, processRegistration Ajax
 * use middle ware login or not, must be login to use BO
 */
Route::prefix('admin')->group(function () {
    Route::resource('login', 'LoginController@index');
});

// Dashboard BO
Route::resource('/', 'DashBoardController@index');



// Member Management

// Content management

// Quiz management

// Book management

/***************************FRONT-END*****************************/

// Count-down page

// e-Learning page

// Library book online

// Money expense management online

// Blog, photos, videos management

// Menu food online