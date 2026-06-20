<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
//Digunakan untuk menangani halaman publik (sebelum login). Berfokus pada menampilkan post-post yang tersedia kepada pengguna umum.

class PageController extends Controller
{

    public function home(Request $request)
    {
        $search = $request->search;

        // $posts = Post::latest('id')->paginate();

        $posts = Post::where('title', 'LIKE', "%{$search}%")
            ->with('user')
            ->latest('id')
            ->paginate();

        return view('home', ['posts' => $posts]);
    }

    /**
     * Get a post, by slug
     * @param Post $post
     * @return  Illuminate\Contracts\View;
     */
    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
