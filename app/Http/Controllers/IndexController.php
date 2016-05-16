<?php

namespace Demo\Http\Controllers;

use Demo\Post;
use Illuminate\Http\Request;

use Demo\Http\Requests;
use Demo\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function showEdit(Request $request){

    }

    public function showView(Request $request){

    }

    public function removeBlog(Request $request)
    {
        Post::destroy($request->only('operate'));
//        $page = Post::find($id);
//        $page->delete();

        return redirect("/admin/index");
    }

}
