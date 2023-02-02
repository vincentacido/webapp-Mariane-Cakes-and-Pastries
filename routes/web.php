<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CarouselController;
use Illuminate\Support\Facades\Route;
use App\Models\Slider;

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
    $sliders = Slider::all();
    return view('homepage',['sliders' => $sliders]);
});



// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// USERS 
Route::get('/users', [UserController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('users');

Route::get('/users/add', [UserController::class, 'form'])
    ->middleware(['auth', 'verified']);

Route::post('/users/add', [UserController::class, 'store'])
    ->middleware(['auth', 'verified']);

Route::get('/users/update/{id}', [UserController::class, 'show'])
    ->middleware(['auth', 'verified']);

Route::post('/users/update/{id}', [UserController::class, 'update'])
    ->middleware(['auth', 'verified']);

Route::get('/users/delete/{id}', [UserController::class, 'delete'])
    ->middleware(['auth', 'verified']);   

    Route::get('/sliders', [SliderController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('sliders');
Route::get('/sliders/create', [SliderController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('create');    
Route::post('/sliders/create', [SliderController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('create');
Route::get('/sliders/{slider}/edit', [SliderController::class, 'edit'])
    ->middleware(['auth', 'verified'])
    ->name('edit');
Route::put('/sliders/{slider}', [SliderController::class, 'update'])
    ->middleware(['auth', 'verified'])
    ->name('update');
Route::get('/sliders/{slider}/delete', [SliderController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('destroy');












Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
