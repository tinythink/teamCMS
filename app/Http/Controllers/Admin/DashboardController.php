<?php

namespace App\Http\Controllers\Admin;

use App\Models\OpenSource;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 显示dashboard
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $pages = Page::count();
        $opens = OpenSource::count();
        $users = User::count();
        return view('admin.dashboard',['pages'=>$pages,'opens'=>$opens,'users'=>$users]);
    }

    /**
     * 显示第三方平台
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function linkPlatform($platform = 'baidu')
    {
        $data = ['baidu'=>'http://tongji.baidu.com/web/welcome/login','qiniu'=>'https://portal.qiniu.com/'];
        return view('admin.platform',['link'=>$data[$platform]]);
    }
}
