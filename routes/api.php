<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/properties', [PropertyController::class, 'index'])->name('index');
Route::post('/property', [PropertyController::class, 'add'])->name('add');
Route::delete('/property/{id}', [PropertyController::class, 'delete'])->name('delete');
