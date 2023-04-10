<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\CustomerReviewController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\MyTeamController;
use App\Http\Controllers\Admin\MyWorkController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\UserRequestServiceController;
use App\Http\Controllers\Admin\UserScoreController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// require __DIR__.'/botman.php';

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




// Route::redirect('/', 'admin/login-page');

Auth::routes();

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {


    Route::group(['prefix' => 'admin', 'namespace' => 'Admin','as'=>'admin.'], function () {
        Route::get('login-page', 'AuthController@loginPage')->name('login.page');
        Route::post('login', 'AuthController@login')->name('login');
        Route::get('logout', 'AuthController@logout')->name('logout');

        Route::group(['middleware' => ['admin']], function () {
            Route::get('home', 'HomeController@index')->name('home');

            Route::resource('blogs', BlogController::class);
            Route::resource('products', ProductController::class);
            Route::post('products-image', [ProductController::class,'uploadProductImage'])->name('products.images.store');

            Route::resource('my-works', MyWorkController::class);
            Route::resource('user-request-services', UserRequestServiceController::class);

            Route::resource('customer-reviews', CustomerReviewController::class);
            Route::resource('categories', CategoryController::class);
            Route::resource('my-teams', MyTeamController::class);
            Route::resource('jobs', JobController::class);
            Route::resource('contact-us', ContactUsController::class);
            Route::get('user-requests', [ContactUsController::class,'userRequest'])->name('user-request.index');
        });
    });
});
