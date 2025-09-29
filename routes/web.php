<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;

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
})->name('welcome');

// Authentication routes
require __DIR__ . '/auth.php';


// Dashboard redirect 
Route::get('/dashboard', function () {
    if (!auth()->check()) {
        return redirect('/login');
    }

    $user = auth()->user();
    if ($user->role === 'admin') {
        return redirect('/admin');
    } else {
        return redirect('/user');
    }
})->middleware('auth')->name('dashboard');

// User Routes 
Route::middleware(['user.role'])->group(function () {
    Route::get('/user', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/user/kirim', [UserController::class, 'formKirim'])->name('user.kirim');
    Route::post('/user/kirim', [UserController::class, 'kirimLagu'])->name('user.kirim.store');
});

// Admin Routes 
Route::middleware(['admin.role'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/tambah-lagu', [AdminController::class, 'formTambah'])->name('admin.tambah');
    Route::post('/admin/tambah-lagu', [AdminController::class, 'tambahLagu'])->name('admin.tambah.store');
});

// Profile routes 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
