<?php

use App\Http\Controllers\PelanggaranController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/pelanggaran', [PelanggaranController::class, 'index'])->name('pelanggaran.index');
// Route::get('/pelanggaran/{id}/show', [PelanggaranController::class, 'show'])->name('pelanggaran.show');
// Route::get('/pelanggaran/add', [PelanggaranController::class, 'create'])->name('pelanggaran.add');
// Route::post('/pelanggaran/store', [PelanggaranController::class, 'store'])->name('pelanggaran.store');
// Route::get('/pelanggaran/{id}', [PelanggaranController::class, 'edit'])->name('pelanggaran.edit');
// Route::put('/pelanggaran/{id}', [PelanggaranController::class, 'update'])->name('pelanggaran.update');

Route::resource('pelanggaran', PelanggaranController::class);
