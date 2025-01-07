<?php

use App\Http\Controllers\PostController;

// Redirect halaman utama ke /posts
Route::get('/', function () {
    return redirect('/posts');
});

// Route resource untuk CRUD posts
Route::resource('posts', PostController::class);
