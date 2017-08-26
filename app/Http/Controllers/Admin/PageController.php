<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
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
        //
        $list = Page::all();

        return view('page.index',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('page.create');
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
        $this->validatePage($request);
        $params = $request->input();
        if (!isset($params['creator'])) {
            $params['creator'] = user()->name;
        }
        $result = Page::create($request->input());
        return $result ? redirect(route('pages.index')) : back()->withErrors(['error'=>'服务器错误']);
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
        $data = Page::find($id);
        return view('page.detail',['data'=>$data]);
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
        $page = Page::find($id);
        $this->validatePage($request,'');
        $result = $page->update($request->input());
        return $result ? redirect(route('pages.index')) : back()->withErrors(['error'=>'服务器错误']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Page::destroy($id) ? redirect(route('pages.index')) : back()->withErrors(['error'=>'服务器错误']);
    }
    protected function validatePage(Request $request,$type = '|unique:pages')
    {
        $rule = [
            'name' => 'required',
            'type' => 'required'.$type,
            'url' => 'required',
            'grey_url' => 'required',
            'module_url' => 'required',
            'creator' => 'required',
            'version' => 'required',
        ];
        return $this->validate($request,$rule);
    }
}
