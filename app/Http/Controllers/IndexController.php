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

    public function destroy($id)
    {
        $childMenus = Post::where('parent_id', '=', $id)->get()->toArray();

        if ( ! empty($childMenus)) {
            return redirect()->back()->withErrors("请先删除其下级分类");
        }

        try {
            if (Post::destroy($id)) {
                return redirect()->back()->withSuccess('删除菜单成功');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(array('error' => $e->getMessage()));
        }
    }

}
