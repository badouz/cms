<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;


Route::get('/',WebsiteController::class)->name("website");
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/settings',SettingController::class);
    Route::resource('/menus',MenuController::class);
});

require __DIR__.'/auth.php';
