<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/invoice', [InvoiceController::class, 'showinvoice'])->middleware(['auth'])->name('invoice');
Route::get('/browser-pdf', [InvoiceController::class, 'openPDFInBrowser'])->middleware(['auth'])->name('browser-pdf');
Route::get('/download-pdf', [InvoiceController::class, 'downloadPDF'])->middleware(['auth'])->name('download-pdf');

require __DIR__.'/auth.php';
