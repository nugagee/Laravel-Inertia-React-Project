<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', ['name' => "Olajide"]);
});


// Route::get('/', [PostController::class, 'index']);

// Route::resource('posts', PostController::class)->except('index');