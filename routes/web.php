<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {

    Route::get('/buyer/trash', [BuyerController::class, 'trash'])->name('buyer.trash');
    Route::get('/buyer/{id}/restore', [BuyerController::class, 'restore'])->name('buyer.restore');
    Route::delete('/buyer/{id}/delete', [BuyerController::class, 'delete'])->name('buyer.delete');
    Route::resource('buyer', BuyerController::class);

    Route::get('/product/trash', [ProductController::class, 'trash'])->name('product.trash');
    Route::get('/product/{id}/restore', [ProductController::class, 'restore'])->name('product.restore');
    Route::delete('/product/{id}/delete', [ProductController::class, 'delete'])->name('product.delete');
    // Route::get('product/pdf', [ProductController::class, 'downloadPdf'])->name('product.pdf');
    Route::resource('product', ProductController::class);
});
