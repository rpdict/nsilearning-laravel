<?php
/**
 * Created by PhpStorm.
 * User: Apple-NETwork
 * Date: 16/2/19
 * Time: 下午3:47
 */

namespace Demo\Http\Controllers;

use Demo\User;
use Illuminate\Http\Request;
use Demo\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use GrahamCampbell\Markdown\Facades\Markdown;

class UsersController extends Controller {
    protected $layout = "layouts.master";

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
//        $name = Markdown::convertToHtml('# foo #');
        return view('greeting', ['name' => $name]);
    }

    public function About()
    {
        //
        return view('about.home');
    }

    public function getRegister() {
        $this->layout->content = View::make('auth.register');
    }
}