<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;



// Home page
Route::get('/', [PageController::class, 'welcome']);

// About page
Route::get('/about', [PageController::class, 'about']);

// News page
Route::get('/news', [PageController::class, 'news']);

// Contact page
Route::get('/contact', [PageController::class, 'contact']);

//auth route for reg,login and password 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route for CRUD operations
Route::resource('events', EventController::class);

Route::get('/events/create', [EventController::class, 'create'])->name('events.create');

Route::get('/events/edit', [EventController::class, 'edit'])->name('events.edit');

Route::get('/events/show', [EventController::class, 'show'])->name('events.show');