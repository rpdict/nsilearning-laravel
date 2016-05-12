<?php

namespace Demo\Http\Controllers;

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

    public function showAdminOperate(Request $request){
        $Operate = $request->input('name');
        if ($Operate == 'edit'){
            return view('greeting', ['name' => $Operate]);
        }elseif ($Operate == 'view'){

        }elseif ($Operate == 'delete'){

        }else{

        }

//        return view('admin.index');
        return view('greeting', ['name' => $Operate]);
    }
}
