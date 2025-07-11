<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SingleActionController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('about', [HomeController::class, 'about'])->name('home.about');

// Route::get('/about', function () {
//     return 'This is about page';
// })->name('home.about');

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

Route::get('contact', function () {
    return view('contact.index');
});

Route::get('about-data', function () {
    $title = 'About Page';
    $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem laudantium aspernatur repellat accusamus omnis, nihil laborum aut eius, libero dolores voluptate vero, facilis sunt tenetur';
    $topics = ['Politics', 'Sports', 'Arts', 'Science'];
    return view('about.index', ['title' => $title, 'description' => $description, 'topics' => $topics]);
});

Route::get('templating', function () {
    return view('template');
});

Route::fallback(function () {
    return 'page Not Found!';
});

Route::get('single-action', SingleActionController::class);

// Route::resource('/blog', BlogController::class);

Route::get('/blog', function() {
    $blogData = Blog::all();
    dd($blogData);
});

// breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
