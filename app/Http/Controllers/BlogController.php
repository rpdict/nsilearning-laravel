<?php

namespace Demo\Http\Controllers;

use Demo\Http\Requests;
use Demo\Http\Controllers\Controller;
use Demo\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


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

    public function showEdit($id){
        $post = Post::findOrFail($id);
        return view('blog.update')->withPost($post);
    }

    public function updateBlog(Request $request){
        $blog = Post::findOrFail(Input::get('blogid'));
        $blog->title = Input::get('title');
        $blog->content = Input::get('content');
//        $blog->author_id = Auth::user()->id;
        $blog->save();
        return redirect("/blog/show/{$blog->id}");
    }

    public function removeBlog(Request $request)
    {
        Post::destroy($request->only('blogid'));
//        $page = Post::find($id);
//        $page->delete();

        return redirect("/admin/index");
    }

    public function showBlogList()
    {
        $posts = Post::with('author')->get();
        return view('admin.index', compact('posts'));
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

//    public function createReply(Request $request, $blogSlug)
//    {
//        $blog = Topic::findOrFail($blogSlug);
//        $blog->createReply($request->user(), $request->only('body'));
//        $blog->touch();
//        return redirect("/blog/show/{$blog->slug}");
//    }
}
