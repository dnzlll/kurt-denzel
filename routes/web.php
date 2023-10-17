<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('index');
});

// Define a custom route for the index action
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

// Define resource routes for other actions
Route::resource('tasks', TaskController::class)->except(['index']);

