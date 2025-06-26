<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'This is about page';
})->name('home.about');

Route::get('/user/{id}/{slug}', function ($id, $slug) {
    return 'Hello User: ' . $id . '; Slug: ' . $slug;
})->name('home.user');

Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    Route::get('create', function () {
        return 'Blog create page';
    })->name('create');
    Route::get('edit', function () {
        return 'Blog edit page';
    })->name('edit');
    Route::get('show', function () {
        return 'Blog show page';
    })->name('show');
});

Route::get('get-route', function () {
    return;
});
Route::post('post-route', function () {
    return;
});
Route::put('put-route', function () {
    return;
});
Route::patch('patch-route', function () {
    return;
});
Route::delete('delete-route', function () {
    return;
});

// breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
