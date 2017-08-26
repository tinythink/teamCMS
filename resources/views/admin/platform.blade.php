@extends('layouts.admin')

@section('content')
    <h2 class="sub-header">百度统计</h2>
    <div>
        <span><strong>用户名：</strong>omteam</span>
        <span><strong>密码：</strong>omteam163,.</span>
    </div>
    <div class="container-fluid">
        <iframe src="{{$link}}" name="topFrame" width="100%" height="800" frameborder="0" seamless="seamless"></iframe>

    </div>
@endsection