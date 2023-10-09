<?php
use App\Http\Controllers\Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
    Route::get('admin',[AdminAuthenticatedSessionController::class, 'create'])->name('admin.create');
    Route::post('admin',[AdminAuthenticatedSessionController::class, 'store'])->name('admin.store');
});

Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/signout',[AdminAuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
    Route::resource('admins',AdminController::class);
    Route::resource('roles',RoleController::class);
    Route::resource('user',UserController::class);
    Route::resource('author',AuthorController::class);
    Route::resource('genre',GenreController::class);
    Route::resource('category',CategoryController::class);
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
