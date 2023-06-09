<?php

use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::redirect('/', '/login');

Route::get('tarea/{tarea}/ver', [TareaController::class,'show'])->name('tarea.show');
Route::get('tarea/registrar', [TareaController::class,'create'])->name('tarea.create');
Route::post('tarea/guardar', [TareaController::class,'store'])->name('tarea.store');
Route::get('tarea/listar', [TareaController::class, 'index'])->name('tarea.index');
Route::get('tarea/{tarea}/editar', [TareaController::class, 'edit'])->name('tarea.edit');
Route::put('tarea/{tarea}', [TareaController::class, 'update'])->name('tarea.update');
Route::delete('tarea/{tarea}', [TareaController::class, 'destroy'])->name('tarea.destroy');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
