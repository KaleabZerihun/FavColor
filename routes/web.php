<?php

use App\Livewire\DisplayFavorites;
use App\Livewire\FavoriteColorForm;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::middleware(['auth'])->group(function () {
    Route::get('/favorite-form', FavoriteColorForm::class)->name('favorite.form');
    Route::get('/favorites', DisplayFavorites::class)->name('favorites.list');
});

require __DIR__.'/auth.php';
