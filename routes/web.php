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
// Login, Register, Password Recover
Route::namespace('Admin\Auth')->domain('admin.' . env('APP_DOMAIN'))->group(function () {
    // Login routes
    Route::get('login', [
        'as' => 'auth.login.form',
        'uses' => 'LoginController@index'
    ]);

    Route::post('login', [
        'as' => 'auth.login.process',
        'uses' => 'LoginController@processLogin'
    ]);

    // Logout route
    Route::get('logout', [
        'as'    => 'auth.logout',
        'uses'  => 'LoginController@logout'
    ]);
});
/**
 * use middle ware login or not, must be login to use BO
 */
Route::middleware(['auth', 'check.admin'])->domain('admin.' . env('APP_DOMAIN'))
    ->namespace('Admin')->group(function () {
        // Dashboard BO
        Route::get('/', [
            'as'    => 'admin.dashboard',
            'uses'  => 'DashboardController@index'
        ]);

        // Member Management
        Route::namespace('User')->group(function () {
            Route::resource('user', 'UserController');
        });

        // Training system management
        Route::prefix('training-system')->namespace('TrainingSystem')->group(function () {
            Route::resource('item', 'ItemController');
            Route::resource('level', 'LevelController');
            Route::resource('config', 'TrainingConfigurationController');
        });

        // Novel management
        Route::prefix('novel')->namespace('Novel')->group(function () {
            Route::resource('author', 'AuthorController');
            Route::resource('book', 'BookController');
            Route::resource('chapter', 'ChapterController');
        });

        // Blog management
        Route::prefix('blog')->namespace('Blog')->group(function () {
            Route::resource('image', 'ImageController');
            Route::resource('video', 'VideoController');
            Route::resource('post', 'PostController');
        });

        // Blog management
        Route::prefix('money-expense')->namespace('Money')->group(function () {
            Route::resource('loan-debt', 'LoanDebtController');
            Route::resource('saving', 'SavingController');
            Route::resource('transaction', 'TransactionController');
            Route::resource('wallet', 'WalletController');
        });

        // E-Learning management
        Route::prefix('learning')->namespace('Learning')->group(function () {
            Route::resource('course', 'CourseController');
            Route::resource('grammar', 'GrammarController');
            Route::resource('kanji', 'KanjiController');
            Route::resource('lesson', 'LessonController');
            Route::resource('word', 'WordController');
        });

        // Count-down management
        Route::namespace('Event')->group(function () {
            Route::resource('event', 'EventController');
        });

        // CV management
        Route::namespace('CV')->group(function () {
            Route::resource('cv', 'CVController');
        });
    });


/***************************FRONT-END*****************************/

//// Login, Register, Password Recover
//Route::namespace('Sagittarius\Auth')->group(function () {
//    // Login routes
//    Route::get('login', [
//        'as' => 'auth.login.form',
//        'uses' => 'LoginController@index'
//    ]);
//
//    Route::post('login', [
//        'as' => 'auth.login.process',
//        'uses' => 'LoginController@processLogin'
//    ]);
//
//    // Register routes
//    Route::get('register', 'RegisterController@index');
//    Route::post('register', 'RegisterController@processRegister');
//
//    // Password reset token routes
//    Route::get('forgot-password', 'PasswordController@index');
//    Route::post('forgot-password', 'PasswordController@sendToken');
//    Route::get('reset-password', 'ResetPasswordController@index');
//    Route::post('reset-password', 'ResetPasswordController@processResetPassword');
//
//    // Logout route
//    Route::post('logout', 'LoginController@logout');
//});

// Count-down page

// e-Learning page

// Library book online

// Money expense management online

// Blog, photos, videos management

// Menu food online
