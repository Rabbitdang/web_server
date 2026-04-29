<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::middleware(['auth'])->get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::middleware(['auth'])->get('/dashboard', function () {
        $users = User::latest()->get();

        return view('admin.dashboard', compact('users'));
    })->name('admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
