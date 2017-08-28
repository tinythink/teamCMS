@extends('layouts.admin')
@section('style')
    <link rel="stylesheet" href="{{asset('webuploader/webuploader.css')}}">
@endsection
@section('content')
    <h2 class="sub-header text-primary text-center">添加H5页面</h2>
    <div class="row">
        <div class="col-md-8 ">
                <!--dom结构部分-->


            <form class="form-horizontal" method="POST" action="{{route('pages.store')}}">
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
                    <label for="name" class="col-sm-2 control-label">name</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('name')}}" class="form-control" id="name" name="name" placeholder="name" autocomplete="on" required >
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>

                </div>
                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                    <label for="type" class="col-sm-2 control-label">type</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('type')}}" class="form-control" id="type" name="type" placeholder="type" autocomplete="on" required>
                         @if ($errors->has('type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <label for="url" class="col-sm-2 control-label">正式环境URL</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('url')}}" class="form-control" id="url" name="url" placeholder="正式环境URL" autocomplete="on" required >
                         @if ($errors->has('url'))
                            <span class="help-block">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('grey_url') ? ' has-error' : '' }}">
                    <label for="grey_url" class="col-sm-2 control-label">灰度环境URL</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('grey_url')}}" class="form-control" id="grey_url" name="grey_url" placeholder="灰度环境URL" autocomplete="on" required >
                         @if ($errors->has('grey_url'))
                            <span class="help-block">
                                <strong>{{ $errors->first('grey_url') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('module_url') ? ' has-error' : '' }}">
                    <label for="module_url" class="col-sm-2 control-label">模块环境URL</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('module_url')}}" class="form-control" id="module_url" name="module_url" placeholder="模块环境URL" autocomplete="on" required >
                         @if ($errors->has('module_url'))
                            <span class="help-block">
                                <strong>{{ $errors->first('module_url') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('creator') ? ' has-error' : '' }}">
                    <label for="module_url" class="col-sm-2 control-label">创建者</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('creator')}}" class="form-control" id="creator" name="creator" autocomplete="on" placeholder="创建者" >
                         @if ($errors->has('creator'))
                            <span class="help-block">
                                <strong>{{ $errors->first('creator') }}</strong>
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
                <div class="form-group{{ $errors->has('shuticon') ? ' has-error' : '' }}">
                    <label for="grey_url" class="col-sm-2 control-label">页面预览图片</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('screenshot')}}" class="form-control" id="screenshot" name="shuticon" autocomplete="on" placeholder="页面预览图片" required>
                         @if ($errors->has('shuticon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('shuticon') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('label') ? ' has-error' : '' }}">
                    <label for="label" class="col-sm-2 control-label">技术标签</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('label')}}" class="form-control" id="label" name="label" autocomplete="on" placeholder="技术标签">
                         @if ($errors->has('label'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('label') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('version') ? ' has-error' : '' }}">
                    <label for="version" class="col-sm-2 control-label">version</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{old('version')}}" class="form-control"  name="version" autocomplete="on" placeholder="版本信息">
                         @if ($errors->has('version'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('version') }}</strong>
                             </span>
                         @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('ideas') ? ' has-error' : '' }}">
                    <label for="ideas" class="col-sm-2 control-label">ideas</label>
                    <div class="col-sm-10">
                        <textarea  class="form-control" name="ideas"  cols="15" rows="5" autocomplete="on"></textarea>
                         @if ($errors->has('ideas'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('ideas') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('mark') ? ' has-error' : '' }}">
                    <label for="mark" class="col-sm-2 control-label">mark</label>
                    <div class="col-sm-10">
                        <textarea  class="form-control" name="mark"  cols="15" rows="5" autocomplete="on"></textarea>
                         @if ($errors->has('mark'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mark') }}</strong>
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
            $('#screenshot').val(val);
        }
    </script>
@endsection