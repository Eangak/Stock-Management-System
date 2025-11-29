<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdjustStockInController;
use App\Http\Controllers\StockInReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {

    // 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/users', [ProfileController::class, 'users'])->name('profile.users');

    // Category Routes
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

    // Unit Routes
    Route::get('/unit', [UnitController::class, 'index'])->name('unit.index');
    Route::get('/unit/create', [UnitController::class, 'create'])->name('unit.create');
    Route::post('/unit/store', [UnitController::class, 'store'])->name('unit.store');
    Route::get('/unit/{unit}/edit', [UnitController::class, 'edit'])->name('unit.edit');
    Route::put('/unit/{unit}', [UnitController::class, 'update'])->name('unit.update');
    Route::delete('/unit/{unit}', [UnitController::class, 'destroy'])->name('unit.destroy');

    // Product Routes
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

    // Stock In Routes
    Route::get('/adjuststockin', [AdjustStockInController::class, 'index'])->name('adjuststockin.index');
    Route::get('/adjuststockin/create', [AdjustStockInController::class, 'create'])->name('adjuststockin.create');
    Route::post('/adjuststockin/store', [AdjustStockInController::class, 'store'])->name('adjuststockin.store');
    Route::get('/adjuststockin/{adjuststockin}/edit', [AdjustStockInController::class, 'edit'])->name('adjuststockin.edit');
    Route::put('/adjuststockin/{adjuststockin}', [AdjustStockInController::class, 'update'])->name('adjuststockin.update');
    Route::delete('/adjuststockin/{adjuststockin}', [AdjustStockInController::class, 'destroy'])->name('adjuststockin.destroy');


    // Report
    Route::get('/report/stockin', [StockInReportController::class, 'index'])->name('report.stockin');

});

require __DIR__.'/auth.php';
