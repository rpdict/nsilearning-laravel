<?php

namespace Demo\Http\Controllers;

use Demo\Post;
use Carbon\Carbon;
use Demo\User;

class BlogsController extends Controller
{
    public function index()
    {
        $posts = Post::where('created_at', '<=', Carbon::now())
            ->orderBy('created_at', 'desc')
            ->paginate(config('blog.posts_per_page'));
        return view('blog.index', compact('posts'));
    }

    public function showPost($id)
    {
        $post = Post::whereId($id)->firstOrFail();
        return view('blog.post')->withPost($post);
    }

    public function showAdminOperate()
    {
        $posts = Post::with('author')->get();
        return view('admin.index', compact('posts'));
    }
}
