<?php

namespace Demo\Http\Controllers;

//use Illuminate\Http\Request;

//use Demo\Http\Requests\Request;
use Illuminate\Support\Facades\Request;
use Demo\Http\Controllers\Controller;

class BlogController extends Controller
{
    //
    public function showCreateBlog(){
        return view('blog.create');
    }
//    public function create(Request $request){
//        $blog = Blog::createBlog($request->user(), $request->only('title', 'body'));
//        return redirect("/blog/show/{$blog->slug}");
//    }

//    public function view($topicId)
//    {
//        $topic = Topic::findOrFail($topicId);
//
//        return view('topic.view', [
//            'topic' => $topic,
//            'replies' => $topic->replies()->paginate()
//        ]);
//    }

    public function store() {
        //使用 Illuminate\Html\Request 来返回全部的表单输入字段
        $input = Request::all();

        //我们直接返回$input，来看一下
        return $input;
    }

//    public function createReply(Request $request, $blogSlug)
//    {
//        $blog = Topic::findOrFail($blogSlug);
//        $blog->createReply($request->user(), $request->only('body'));
//        $blog->touch();
//        return redirect("/blog/show/{$blog->slug}");
//    }
}
