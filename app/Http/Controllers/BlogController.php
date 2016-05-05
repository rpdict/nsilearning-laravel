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
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function showCreateBlog(){
        return view('blog.create');
    }

    public function create(Request $request){
        $blog = Post::createBlog($request->user(), $request->only('title', 'content'));
        return redirect("/blog/show/{$blog->id}");
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

//    public function store() {
//        if (Post::create(Input::all())) {
//            return Redirect::back();
//        } else {
//            return Redirect::back()->withInput()->withErrors('评论发表失败！');
//        }
//    }

//    public function createReply(Request $request, $blogSlug)
//    {
//        $blog = Topic::findOrFail($blogSlug);
//        $blog->createReply($request->user(), $request->only('body'));
//        $blog->touch();
//        return redirect("/blog/show/{$blog->slug}");
//    }
}
