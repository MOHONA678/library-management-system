<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

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
Route::middleware('guest:admin')->group(function () {
    Route::get('admin',[AdminController::class, 'create'])->name('admin.create');
    Route::post('admin',[AdminController::class, 'store'])->name('admin.store');
});

Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/signout',[AdminController::class, 'destroy'])->name('admin.logout');
    Route::resource('roles',RoleController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
