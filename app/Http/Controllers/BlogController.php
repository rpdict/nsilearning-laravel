<?php

namespace Demo\Http\Controllers;

use Demo\Http\Requests;
use Demo\Http\Controllers\Controller;

use Demo\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class BlogController extends Controller
{
    //
    public function showCreateBlog(){
        return view('blog.create');
    }
    public function create(Request $request){
        $blog = Post::createBlog($request->user(), $request->only('title', 'content'));
        return redirect("/blog/show/{$blog->slug}");
    }
}
