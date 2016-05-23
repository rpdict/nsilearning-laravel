<?php

namespace Demo\Http\Controllers;

use Demo\Post;
use Carbon\Carbon;
use Demo\User;
use GrahamCampbell\Markdown\Facades\Markdown;

class BlogsController extends Controller
{
    public function index()
    {
        $posts = Post::where('created_at', '<=', Carbon::now())
            ->orderBy('created_at', 'desc')
            ->paginate(config('blog.posts_per_page'));
        return view('blog.index', compact('posts'));
    }

    public function showBlog($id)
    {
        $post = Post::whereId($id)->firstOrFail();
        $post->content = Markdown::convertToHtml($post->content);;
        return view('blog.post')->withPost($post);
    }

    public function showBlogList()
    {
        $posts = Post::with('author')->get();
        return view('admin.index', compact('posts'));
    }
}
