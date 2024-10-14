<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\ParticipantController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sports', [SportsController::class, 'index'])->name('sports');
Route::get('/join', [JoinController::class, 'create'])->name('join');
Route::post('/join', [JoinController::class, 'store']);
// Edit participant
Route::get('/participants/{id}/edit', [ParticipantController::class, 'edit'])->name('participants.edit');

// Update participant
Route::put('/participants/{id}', [ParticipantController::class, 'update'])->name('participants.update');

// Delete participant
Route::delete('/participants/{id}', [ParticipantController::class, 'destroy'])->name('participants.destroy');
