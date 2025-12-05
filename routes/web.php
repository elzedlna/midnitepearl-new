<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {return view('landing');});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Admin Routes
Route::prefix('admin')->group(function () {
    //Guest routes
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login']);
    });

    //Protected routes 
    Route::middleware('admin')->group(function () {
        Route::get('/home', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.home');
        Route::post('/logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('admin.logout');
    });
});

//STATIC PAGES
Route::get('list-products', function () {return view('list-products');});
Route::get('list-products', function () {return view('list-products');})->name('list-products');


//Product Route (Individually)
Route::get('/products/single-item', function () {return view('products.single-item');});

//Admin Home Page
Route::get('/admin/home', function () {return view('admin.home');});




require __DIR__.'/auth.php';
