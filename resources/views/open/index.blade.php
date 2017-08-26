@extends('layouts.admin')
@section('content')
    <h2 class="sub-header">开源作品列表</h2>
    <div class="form-group">
        <a href="{{route('open.create')}}" class="btn btn-primary">添加作品</a>
    </div>
    <div class="table-responsive">

        <table class="table table-bordered   table-hover" id="table">
            <thead>
            <tr>
                <th>序号</th>
                <th>名称</th>
                <th>访问地址</th>
                <th>描述</th>
                <th>缩略图</th>
                <th>作者</th>
                <th>标签</th>
                <th>创建时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
            <tr class="edit" data-id="{{$item->id}}">
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->url}}</td>
                <td>{{$item->desc}}</td>
                <td><img src="{{$item->thumb}}" class="img-circle" style="width: 50px;height: 50px;" alt=""></td>
                <td>{{$item->author}}</td>
                <td>{{$item->label}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                    <form action="/open/{{$item->id}}" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-default btn-danger" data-id="{{$item->id}}">删除</button>
                    </form>
                </td>
            </tr>
           @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('script')
<script>
    var $table = $('#table');
    $table.on('click','.edit',function () {
        var $this = $(this),
            id = $this.data('id');
        window.location.href = '/open/'+id;
    })
</script>

@endsection