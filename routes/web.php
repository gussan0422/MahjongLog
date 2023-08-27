<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamescoreController;
use App\Http\Controllers\GrouptotalscoreController;
use App\Http\Controllers\GroupscoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/logs', [GrouptotalscoreController::class, 'grouptotalscoreindex']);

// Route::get('/logs/{groupscore}', [GroupscoreController::class ,'groupscoreindex','create']);

Route::post('/logs/{groupscore}', [GroupscoreController::class, 'store']);

// Route::get('/logs', [GamescoreController::class, 'index']);

Route::get('/logs/{groupscore}', [GroupscoreController::class ,'show']);

// Route::get('/logs', [LogController::class, 'usersshow']);

// Route::get('/logs/usercreate', [LogController::class, 'userscreate']);

// Route::post('/logs', [LogController::class, 'usersstore']);

require __DIR__.'/auth.php';
