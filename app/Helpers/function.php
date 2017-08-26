<?php
/**
 * Created by PhpStorm.
 * User: freddy
 * Date: 2017/6/24
 * Time: 11:25
 */


if(! function_exists('user')){

    /**
     * @param null $driver
     * @return mixed
     */
    function user($driver = null){
        if($driver){
            return app('auth')->guard($driver)->user();
        }
        return app('auth')->user();
    }
}
if(! function_exists('isAdmin')){

    function isAdmin(){
        return user()->auth == 2;
    }
}
if(! function_exists('jump')){

    /**
     * @param string $msg
     * @param $route
     * @param int $time
     * @param bool $type
     * @return \Illuminate\Http\RedirectResponse
     */
    function jump($msg = '默认提示信息', $route = 'root',$time = 2 ,$type = true){
        return redirect(route('prompt'))->with([$msg,'url' =>route($route), 'jumpTime'=>$time,'status'=>$type]);
    }
}
if(! function_exists('getBreadcrumb')){

    function getBreadcrumb($currentRoute,$menu){
        $re = null;
        $one = [];
        for ($i = 0;$i < count($menu);$i++) {
            if ($menu[$i]['url'] == $currentRoute) {
                array_push($re,$menu[$i]['name']);
                break;
            }
            $submenu = $menu[$i]['submenu'];
            if (count($submenu) > 0) {
                for($j = 0; $j < count($submenu); $j++) {

                }
            }
        }
//        if ($re === null) {
//            getBreadcrumb($currentRoute,);
//        }
    }
}


