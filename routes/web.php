<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ProfileController;




Route::controller(ThemeController::class)->name('theme.')->group( function (){
    Route::get('/','index')->name('index');
    Route::get('/contact','contact')->name('contact');
    Route::get('/category','category')->name('category');
    // Route::get('/login','login')->name('login');
    // Route::get('/register','register')->name('register');
    Route::get('/single-blog','singleblog')->name('single-blog');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
