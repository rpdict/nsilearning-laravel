<?php

namespace Demo\Http\Controllers;

use Illuminate\Http\Request;

use Demo\Http\Requests;
use Demo\Http\Controllers\Controller;
use Redirect, Input;

class BlogController extends Controller
{
    //
    public function showCreateBlog(){
        return view('blog.create');
    }
    public function create(Request $request){
        $blog = Blog::createBlog($request->user(), $request->only('title', 'body'));
        return redirect("/blog/show/{$blog->slug}");
    }
//    public function view($topicId)
//    {
//        $topic = Topic::findOrFail($topicId);
//
//        return view('topic.view', [
//            'topic' => $topic,
//            'replies' => $topic->replies()->paginate()
//        ]);
//    }

    public function createReply(Request $request, $blogSlug)
    {
        $blog = Topic::findOrFail($blogSlug);
        $blog->createReply($request->user(), $request->only('body'));
        $blog->touch();
        return redirect("/blog/show/{$blog->slug}");
    }
}
