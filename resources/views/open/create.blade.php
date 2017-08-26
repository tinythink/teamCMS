@extends('layouts.admin')
@section('style')
    <link rel="stylesheet" href="{{asset('webuploader/webuploader.css')}}">
@endsection
@section('content')
    <h2 class="sub-header text-primary text-center">添加开源作品</h2>
    <div class="row">
        <div class="col-md-8 ">
            <!--dom结构部分-->


            <form class="form-horizontal" method="POST" action="{{route('open.store')}}">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-sm-2 control-label">开源作品名称</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('name')}}" class="form-control" id="name" name="name"
                               placeholder="开源作品名称" autocomplete="on" required>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>

                </div>
                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <label for="label" class="col-sm-2 control-label">访问地址</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('label')}}" class="form-control" id="url" name="url"
                               autocomplete="on" placeholder="访问地址">
                        @if ($errors->has('label'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('label') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                    <label for="type" class="col-sm-2 control-label">描述</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('desc')}}" class="form-control" id="desc" name="desc"
                               placeholder="简单的描述" autocomplete="on" required>
                        @if ($errors->has('desc'))
                            <span class="help-block">
                                <strong>{{ $errors->first('desc') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('label') ? ' has-error' : '' }}">
                    <label for="grey_url" class="col-sm-2 control-label">标签</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('label')}}" class="form-control" id="label" name="label"
                               placeholder="标签" autocomplete="on" required>
                        @if ($errors->has('label'))
                            <span class="help-block">
                                <strong>{{ $errors->first('label') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                    <label for="module_url" class="col-sm-2 control-label">创建者</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('author')}}" class="form-control" id="author" name="author"
                               placeholder="创建者" autocomplete="on" required>
                        @if ($errors->has('author'))
                            <span class="help-block">
                                <strong>{{ $errors->first('author') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">页面截图</label>
                    <div class="col-sm-10">
                        <div id="uploader-demo">
                            <!--用来存放item-->
                            <div id="fileList" class="uploader-list"></div>
                            <div id="filePicker">选择图片</div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-default btn-info" id="upload">上传</button>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('thumb') ? ' has-error' : '' }}">
                    <label for="grey_url" class="col-sm-2 control-label">页面预览图片</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('thumb')}}" class="form-control" id="thumb" name="thumb"
                               autocomplete="on" placeholder="thumb" required>
                        @if ($errors->has('thumb'))
                            <span class="help-block">
                                <strong>{{ $errors->first('thumb') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default btn-primary">提交</button>
                    </div>
                </div>

            </form>


        </div>


    </div>

@endsection
@section('script')
    <script src="{{asset('webuploader/webuploader.min.js')}}"></script>
    <script src="{{asset('js/upload.js')}}"></script>
    <script>

        function setScreenshot(val) {
            $('#thumb').val(val);

        }
    </script>
@endsection