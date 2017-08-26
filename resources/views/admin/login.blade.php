<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('/favicon.ico')}}">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('bootstrap/assets/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/admin/signin.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="{{asset('bootstrap/assets/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
    <script src="{{asset('bootstrap/assets/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <form class="form-signin" method="post" action="{{url('admin/doLogin')}}">
        {{--@if (count($errors) > 0)--}}
            {{--<div class="alert alert-danger">--}}
                {{--<ul>--}}
                    {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}
        {{ csrf_field() }}
        <h2 class="form-signin-heading">H5团队信息管理系统</h2>
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="inputEmail" class="sr-only">邮箱</label>
            <input type="email" id="inputEmail" name="email" value="{{ old('email') }}" class="form-control" placeholder="请输入邮箱地址" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="inputPassword" class="sr-only">密码</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="请输入密码" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> 记住密码
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
    </form>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{asset('bootstrap/assets/js/ie10-viewport-bug-workaround.js')}}"></script>
</body>
</html>
