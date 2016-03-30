<?php
/**
 * Created by PhpStorm.
 * User: Apple-NETwork
 * Date: 16/2/19
 * Time: 下午3:47
 */

namespace Demo\Http\Controllers;

use Illuminate\Http\Request;
use Demo\Http\Controllers\Controller;

class UsersController extends Controller {
//    protected $layout = "layouts.master";

    public function showUsers()
    {
        return view('users', [
            'users' => User::getRecentlyUsers()
        ]);
    }
    /**
     * 显示所给定的用户个人数据。
     *
     * @param  int  $id
     * @return Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');

        //
        return view('greeting', ['name' => $name]);
    }

    public function About(Request $request)
    {
        //
        return view('about.about');
    }

    public function getRegister() {
        $this->layout->content = View::make('auth.register');
    }
}