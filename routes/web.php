<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::view('/', 'welcome');

Route::get('/dashboard', function () {
    $users = User::where('id', '!=', auth()->user()->id)->get();
    return view('dashboard', [
        'users' => $users
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
