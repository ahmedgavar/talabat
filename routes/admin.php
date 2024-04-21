<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AdminSettingController;
use App\Http\Controllers\AuthController as ControllersAuthController;
use App\Http\Controllers\UserController;
use App\Models\AdminSetting;
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

//------------------------------- start  authentication ---------
Route::get('/register', [AuthController::class, 'register_page'])->name('admins.register_page');

Route::post('/register_post', [AuthController::class, 'register_post'])->name('register');
Route::namespace('admin')->prefix('admin')->as('admins.')->middleware('guest:admin')->group(function () {
    Route::post('/login_post', [AuthController::class, 'login'])->name('login');
    Route::get('/login', [AuthController::class, 'login_page'])->name('login_page');

});
//------------------------------- end  authentication ---------

Route::namespace('admin')->prefix('admin')->middleware('auth:admin')->name('admins.')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('settings', [AdminSettingController::class, 'index'])->name('settings');
    // -----------------------start products -------------------------------------
    Route::namespace('products')->prefix('products')->name('products.')->group(function () {

        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('{product}', [ProductController::class, 'show'])->name('show');
        Route::put('{product}', [ProductController::class, 'edit'])->name('edit');
        Route::delete('{product}', [ProductController::class, 'des'])->name('destroy');
    });

    // -----------------------end products -------------------------------------

    // -----------------------start categories -------------------------------------
    Route::namespace('categories')->prefix('categories')->name('categories.')->group(function () {

        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/list', [CategoryController::class, 'getCategories'])->name('list');

        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::post('/', [CategoryController::class, 'store'])->name('store');
        Route::get('edit', [CategoryController::class, 'edit'])->name('edit');
        Route::get('delete', [CategoryController::class, 'delete'])->name('delete');

    });

    //dashboard
    Route::get('/', function () {
        return view('layouts.admin');
    });

});
