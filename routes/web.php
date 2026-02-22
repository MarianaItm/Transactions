<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WebhookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/topup', [TransactionController::class, 'topupForm'])->name('topup.form');
    Route::post('/topup', [TransactionController::class, 'createOrder'])->name('topup.create');

    Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
    Route::post('/transaction/show', [TransactionController::class, 'show'])->name('transaction.show');

    Route::get('/paypal/success', [TransactionController::class, 'paypalSuccess'])->name('paypal.success');
    Route::get('/paypal/cancel', [TransactionController::class, 'paypalCancel'])->name('paypal.cancel');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/webhook/paypal', [WebhookController::class, 'handle'])->name('webhook.paypal');

require __DIR__.'/auth.php';
