<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StockController;
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

    Route::resource('stock', StockController::class);



    Route::get('/sales/trash', [SaleController::class, 'trash'])->name('sales.trash');
    Route::get('/sales/{id}/restore', [SaleController::class, 'restore'])->name('sales.restore');
    Route::delete('/sales/{id}/delete', [SaleController::class, 'delete'])->name('sales.delete');
    Route::resource('sales', SaleController::class);


    // Route::get('/payment/index', [PaymentController::class, 'index'])->name('payment.index');
    // Route::get('/payment/create', [PaymentController::class, 'create'])->name('payment.create');
    // Route::post('/payment/store', [PaymentController::class, 'store'])->name('payment.store');
    // Route::get('/payment/edit', [PaymentController::class, 'edit'])->name('payment.edit');
    // Route::get('/payment/delete', [PaymentController::class, 'destroy'])->name('payment.delete');

    Route::get('/payment/trash', [PaymentController::class, 'trash'])->name('payment.trash');
    Route::get('/payment/{id}/restore', [PaymentController::class, 'restore'])->name('payment.restore');
    Route::delete('/payment/{id}/delete', [PaymentController::class, 'delete'])->name('payment.delete');
    Route::resource('payment', PaymentController::class);
});
