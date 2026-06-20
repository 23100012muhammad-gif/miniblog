<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

// Route::get('home', [PageController::class, 'home'])->name('home');

// Route::get('blog', [PageController::class, 'blog'])->name('blog');


// Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home'); //menampilkan halaman utama web
    Route::get('blog', 'blog')->name('blog'); //menampilkan daftar blog
    Route::get('post/{post:slug}', 'post')->name('post'); //menampilkan halaman detail untuk satu blog
});


Route::redirect('dashboard', 'posts')->name('dashboard'); //jika pengguna mengunjungi dashboard,otomatis ke halaman posts.

Route::resource('posts', PostController::class)->except(['show'])->middleware(['auth']); //Digunakan untuk mengelola postingan blog (buat, lihat, edit, hapus). 

require __DIR__ . '/auth.php';
