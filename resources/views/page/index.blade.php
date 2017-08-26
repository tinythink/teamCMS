@extends('layouts.admin')
@section('content')
    <h2 class="sub-header">H5页面列表</h2>
    <div class="form-group">
        <a href="{{route('pages.create')}}" class="btn btn-primary">添加页面</a>
    </div>
    <div class="table-responsive">

        <table class="table table-bordered   table-hover" id="table">
            <thead>
            <tr>
                {{--<th>序号</th>--}}
                <th>类型</th>
                <th>名字</th>
                <th>正式环境</th>
                <th>页面预览</th>
                <th>版本</th>
                <th>标签</th>
                <th>创意</th>
                <th>创建者</th>
                <th>备注</th>
                <th>创建时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>




            @foreach($list as $item)
            <tr class="edit" data-id="{{$item->id}}">
                {{--<td>{{$item->id}}</td>--}}
                <td>{{$item->type}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->url}}</td>
                <td><img src="{{$item->shuticon}}" class="img-circle" style="width: 50px;height: 50px;" alt=""></td>
                <td>{{$item->version}}</td>
                <td>{{$item->label}}</td>
                <td>{{$item->idea}}</td>
                <td>{{$item->creator}}</td>
                <td>{{$item->mark}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                    <form action="/pages/{{$item->id}}" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-default btn-danger" >删除</button>
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
        window.location.href = '/pages/'+id;
    })
</script>

@endsection