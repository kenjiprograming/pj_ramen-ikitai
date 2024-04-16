<?php

use App\Http\Controllers\ApiTestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RamenController;
use App\Http\Controllers\TopController;
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


Route::get('/admin', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/admin/ramen/input', [RamenController::class, 'input'])
//     ->name('admin.ramen.input');
Route::resource('/admin/ramen', RamenController::class)
    ->except(['store', 'update']);
Route::post('/admin/ramen/create', [RamenController::class, 'store'])
    ->name('admin.ramen.store');
Route::put('/admin/ramen/{ramen}/edit', [RamenController::class, 'update'])
    ->name('admin.ramen.update');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [TopController::class, 'index'])->name('top.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/ramens', [ApiTestController::class, 'index']);
Route::post('/ramens', [ApiTestController::class, 'post']);
Route::get('/concurrentRamens', [ApiTestController::class, 'concurrent']);

require __DIR__.'/auth.php';
