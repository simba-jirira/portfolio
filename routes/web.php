<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

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

Route::controller(PortfolioController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'service')->name('service');
    Route::get('/contact', 'contact')->name('contact');
});

Route::controller(ContactController::class)->group(function () {
    Route::post('/contactsend','contactUs')->name('contact.send');
});

//Route::controller(ProjectsController::class)->group(function (){
//    Route::get('/projects','index')->name('list-projects');
//});

Route::prefix('manage/')->group(function () {

    // Managing everything about projects
    Route::controller(ProjectsController::class)->group(function (){
        Route::get('/projects','index')->name('projects.index');
    });

    Route::controller(ReviewController::class)->group(function (){
       Route::get('projects/{project}/reviews', 'index')->name('reviews.index');
       Route::post('projects/{project}/reviews', 'store')->name('reviews.store');
        Route::get('review/{token}', 'showForm')->name('review.form');
        Route::post('review/{token}', 'submitForm')->name('review.submit');
    });
});
