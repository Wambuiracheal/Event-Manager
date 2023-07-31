<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;



// Home page
Route::get('/', [EventsController::class, 'welcome']);

// About page
Route::get('/about', [EventsController::class, 'about']);

// News page
Route::get('/news', [EventsController::class, 'news']);

// Contact page
Route::get('/contact', [EventsController::class, 'contact']);

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
