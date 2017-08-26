@extends('layouts.admin')

@section('content')
    <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
            <div class="babel-brand"><strong>{{$pages}}</strong></div>
            <h4>H5工程项目数量</h4>
            <span class="text-muted">所有H5工程项目</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <div class="babel-brand"><strong>{{$opens}}</strong></div>
            <h4>开源作品</h4>
            <span class="text-muted">所有H5团队开源的作品</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <div class="babel-brand"><strong>{{$users}}</strong></div>
            <h4>用户</h4>
            <span class="text-muted">用户数量</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <div class="babel-brand"><strong>200</strong></div>
            <h4>其他</h4>
            <span class="text-muted">其他</span>
        </div>
    </div>


@endsection