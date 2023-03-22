<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\UserScoreController;
use App\Http\Controllers\WebSite\BlogController;
use App\Http\Controllers\WebSite\ContactUsController;
use App\Http\Controllers\WebSite\MyWorkController;
use App\Http\Controllers\WebSite\ProductController;
use App\Http\Controllers\WebSite\WebSiteController;
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




Route::redirect('/', 'home');

// Auth::routes();

// Route::group([
//     'prefix' => LaravelLocalization::setLocale(),
//     'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
// ], function () {




    Route::get('home', [WebSiteController::class,'home'])->name('home');
    Route::get('home', [WebSiteController::class,'home'])->name('home');
    Route::get('our-services', [WebSiteController::class,'ourServices'])->name('our-services');
    Route::get('about-us', [WebSiteController::class,'aboutUs'])->name('about-us');
    Route::resource('blogs', BlogController::class);
    Route::resource('products', ProductController::class);
    Route::resource('my-works', MyWorkController::class);
    Route::resource('contact-us', ContactUsController::class);
    Route::post('user-requests', [ContactUsController::class,'userRequest'])->name('user.requests');

// });
