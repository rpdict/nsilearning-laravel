<?php

namespace Demo\Http\Controllers;

use Demo\Post;
use Carbon\Carbon;
use Demo\User;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\View;

class BlogsController extends Controller
{
    public function index()
    {
        $posts = Post::where('created_at', '<=', Carbon::now())
            ->orderBy('created_at', 'desc')
//            ->paginate();
            ->paginate(config('blog.posts_per_page'));
//        return $posts;
//        return view('blog.index', compact('posts'));
//        return view('blog.index', json_encode(compact('posts')));
//        return response()->json($posts);
//        $posts = response()->json($posts);
        return view('blog.index',compact('posts'));
//        return view('greeting')->withPosts($posts);
//        return View::make('greeting')->with($posts);
//        echo $posts;
    }

    public function showBlog($id)
    {
        $post = Post::whereId($id)->firstOrFail();
        $post->content = Markdown::convertToHtml($post->content);
        return view('blog.post')->withPost($post);
    }


}
