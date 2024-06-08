<?php

use App\Http\Controllers\ApiTestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RamenController;
use App\Http\Controllers\RamenController as FrontRamenController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\DetailController;
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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {

        Route::get('/ramen', [RamenController::class, 'index'])
            ->name('ramen.index');

        Route::get('/ramen/create', [RamenController::class, 'create'])
            ->name('ramen.create');

        Route::post('/ramen/create', [RamenController::class, 'store'])
            ->name('ramen.store');

        Route::get('/ramen/generate', [RamenController::class, 'generate'])
            ->name('ramen.generate');

        Route::get('/ramen/{ramen}', [RamenController::class, 'show'])
            ->name('ramen.show');

        Route::get('/ramen/{ramen}/edit', [RamenController::class, 'edit'])
            ->name('ramen.edit');

        Route::put('/ramen/{ramen}/edit', [RamenController::class, 'update'])
            ->name('ramen.update');

        Route::delete('/ramen/{ramen}', [RamenController::class, 'destroy'])
            ->name('ramen.destroy');
    });
});

Route::prefix('ramen')->name('ramen.')->group(function () {

    Route::get('/', [FrontRamenController::class, 'index'])
        ->name('index');

    Route::get('/search', [FrontRamenController::class, 'search'])
        ->name('search');

    Route::get('/show', [FrontRamenController::class, 'show'])
        ->name('show');

});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [TopController::class, 'index'])->name('top.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/ramens', [ApiTestController::class, 'post']);
Route::get('/concurrentRamens', [ApiTestController::class, 'concurrent']);

require __DIR__.'/auth.php';
