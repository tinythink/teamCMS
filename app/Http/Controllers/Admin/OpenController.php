<?php

namespace App\Http\Controllers\Admin;

use App\Models\OpenSource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = OpenSource::all();
        return view('open.index',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('open.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validateOpen($request);
        $params = $request->input();
        if (!isset($params['author'])) {
            $params['author'] = user()->name;
        }

        $result =  OpenSource::create($params);
        return $result ? redirect(route('open.index')) : back()->withErrors(['error'=>'服务器错误']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = OpenSource::find($id);
        return view('open.detail',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $page = OpenSource::find($id);
        $this->validateOpen($request);
        $result = $page->update($request->input());
        return $result ? redirect(route('open.index')) : back()->withErrors(['error'=>'服务器错误']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return OpenSource::destroy($id) ? redirect(route('open.index')) : back()->withErrors(['error'=>'服务器错误']);
    }

    /**
     * 插入或者更新数据验证
     * @param Request $request
     */
    protected function validateOpen(Request $request)
    {
        $rule = [
            'name' => 'required',
            'url' => 'required',
            'desc' => 'required',
        ];
        return $this->validate($request,$rule);
    }
}
