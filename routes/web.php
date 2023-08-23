<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


//auth route for reg,login and password 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Home page
Route::get('/', [PageController::class, 'welcome']);

// About page
Route::get('/about', [PageController::class, 'about']);

// News page
Route::get('/news', [PageController::class, 'news']);

// Contact page
Route::get('/contact', [PageController::class, 'contact']);

//admin page
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [PageController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [PageController::class, 'dashboard'])->name('admin.dashboard');
});    

//route for CRUD operations
Route::resource('events', EventController::class);

Route::get('/events/create', [EventController::class, 'create'])->name('events.create');

Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');

Route::get('/events/{id}/show', [EventController::class, 'show'])->name('events.show');

//logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



