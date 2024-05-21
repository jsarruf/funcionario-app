<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\DepartamentosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/funcionarios', [FuncionariosController::class, 'index'])->name('funcionarios.index');
Route::get('/funcionarios/create', [FuncionariosController::class, 'create'])->name('funcionarios.create');
Route::post('/funcionarios', [FuncionariosController::class, 'store'])->name('funcionarios.store');
Route::get('/funcionarios/{id}', [FuncionariosController::class, 'show'])->name('funcionarios.show');
Route::get('/funcionarios/{id}/edit', [FuncionariosController::class, 'edit'])->name('funcionarios.edit');
Route::put('/funcionarios/{id}', [FuncionariosController::class, 'update'])->name('funcionarios.update');
Route::delete('/funcionarios/{id}', [FuncionariosController::class, 'destroy'])->name('funcionarios.destroy');

Route::get('/departamentos', [DepartamentosController::class, 'index'])->name('departamentos.index');
Route::get('/departamentos/create', [DepartamentosController::class, 'create'])->name('departamentos.create');
Route::post('/departamentos', [DepartamentosController::class, 'store'])->name('departamentos.store');
Route::get('/departamentos/{id}/edit', [DepartamentosController::class, 'edit'])->name('departamentos.edit');
Route::put('/departamentos/{id}', [DepartamentosController::class, 'update'])->name('departamentos.update');
Route::delete('/departamentos/{id}', [DepartamentosController::class, 'destroy'])->name('departamentos.destroy');



require __DIR__.'/auth.php';
