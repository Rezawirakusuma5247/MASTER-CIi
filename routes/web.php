<?php

use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('information', [DosenController::class, 'info'])->name('information');
Route::get('index', [DosenController::class, 'index'])->name('index');
Route::get('/utp/create', [DosenController::class, 'create'])->name('create');
Route::post('/utp/store',  [DosenController::class, 'store'])->name('store');
Route::get('/utp/{utp}/edit', [DosenController::class, 'edit'])->name('edit');
Route::put('/utp/{utp}', [DosenController::class, 'update'])->name('update');
Route::delete('/utp/{utp}', [DosenController::class, 'destroy'])->name('delete');
Route::get('/dosen/export-excel', [DosenController::class, 'exportToExcel'])->name('dosen.export.excel');
Route::get('/dosen/export-pdf', [DosenController::class, 'exportToPDF'])->name('dosen.export.pdf');
Route::get('/dosen/search', [DosenController::class, 'search'])->name('dosen.search');

