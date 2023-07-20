<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;

// Home page
Route::get('/', [HomeController::class, 'home']);

// About page
Route::get('/about', [AboutController::class, 'about']);

// News page
Route::get('/news', [NewsController::class, 'news']);

// Contact page
Route::get('/contact', [ContactController::class, 'contact']);

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
