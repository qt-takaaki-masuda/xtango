<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');
// Dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
// Level
Route::middleware(['auth:sanctum', 'verified'])->get('/level/{id}',[App\Http\Controllers\LevelController::class, 'index'])->name('level.index');
// Section
Route::middleware(['auth:sanctum', 'verified'])->get('/section/{id}',[App\Http\Controllers\SectionController::class, 'index'])->name('section.index');
// 単語 → 意味
Route::middleware(['auth:sanctum', 'verified'])->get('/word/{mode}/{id}',[App\Http\Controllers\WordController::class, 'index'])->name('word.index');
// 回答時間保存
Route::middleware(['auth:sanctum', 'verified'])->post('/api/log/saveAnswerTime',[App\Http\Controllers\Api\LogController::class, 'saveAnswerTime'])->name('log.saveAnswerTime');