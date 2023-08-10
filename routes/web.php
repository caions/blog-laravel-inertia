<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello')->with('nome','Caio');
});

Route::resource('posts', PostController::class);