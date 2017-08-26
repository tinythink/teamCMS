<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{route('dashboard')}}">H5团队信息管理系统</a>
</div>
<div id="navbar" class="navbar-collapse collapse" style="padding-right: 30px;">
    <ul class="nav navbar-nav " style="margin-left: 50px;">
        {{--<li><a href="#">Dashboard</a></li>--}}
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="false">第三方平台连接 <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{asset('link').'/baidu'}}" target="_blank">百度统计</a></li>
                <li><a href="{{asset('link').'/qiniu'}}" target="_blank">七牛云</a></li>
                {{--<li role="separator" class="divider"></li>--}}
                {{--<li class="dropdown-header">系统设置</li>--}}
                {{--<li><a href="#">系统设置</a></li>--}}
                {{--<li><a href="#">One more separated link</a></li>--}}
            </ul>
        </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
        {{--<li><a href="#">Dashboard</a></li>--}}
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="false">设置 <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">系统设置</a></li>
                <li><a href="#">帮助与反馈</a></li>
                {{--<li role="separator" class="divider"></li>--}}
                {{--<li class="dropdown-header">系统设置</li>--}}
                {{--<li><a href="#">系统设置</a></li>--}}
                {{--<li><a href="#">One more separated link</a></li>--}}
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        退出
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                <li><a href="#">个人设置</a></li>
            </ul>
        </li>
    </ul>
    {{--<form class="navbar-form navbar-right">--}}
    {{--<input type="text" class="form-control" placeholder="Search...">--}}
    {{--</form>--}}
</div>