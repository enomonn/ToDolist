<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/posts/setting', [PostController::class, 'setting']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::post('/tasks/{goal}', [PostController::class, 'store_task']);
    Route::get('/goal/".$goal->id', [PostController::class, 'show']);
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/goal/{goal}', [PostController::class, 'show']);
    Route::get('/posts/{goal}/edit', [PostController::class, 'edit']);
    Route::put('/posts/edit/{goal}', [PostController::class, 'update']);
    Route::delete('/posts/{goal}', [PostController::class,'delete']);
    Route::delete('/tasks/{task}/{goal}', [PostController::class,'delete_task']);
});
require __DIR__.'/auth.php';

