<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\OpenSource;
use Illuminate\Http\Request;

class OpenController extends BaseController
{
    //
    public function index()
    {
        $list = OpenSource::all();
        return $this->ajaxSuccess('获取成功',$list);
    }
}
