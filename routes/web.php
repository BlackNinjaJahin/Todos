<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

Route::get('/', [TodosController::class, 'index'])->name('todo.home');
Route::get('/create', function () {
    return view('create');
})->name('todo.create');
Route::get('/edit/{id}', [TodosController::class, 'edit'])->name('todo.edit');
Route::post('/create', [TodosController::class, 'store'])->name('todo.store');
Route::post('/update', [TodosController::class, 'updateData'])->name('todo.update');
Route::post('/delete/{id}', [TodosController::class, 'delete'])->name('todo.delete');
Route::post('/mark-complete/{id}', [TodosController::class, 'markComplete'])->name('todo.complete');
