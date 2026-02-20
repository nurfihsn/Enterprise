<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

# Improve - Before

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

# Improve - After
Route::get('/dashboard', [DashboardController::class, 'index']);