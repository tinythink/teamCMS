<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.common.head')

    <title>{{ config('app.name', 'H5团队信息管理') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('bootstrap/assets/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/admin/dashboard.css')}}" rel="stylesheet">
    @yield('style')
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

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        @include('layouts.common.navbar')
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            @include('layouts.common.siderbar')
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            {{--<h2 class="page-header"></h2>--}}


                <ol class="breadcrumb">
                    @for($i = 0; $i < count($menu); $i++)
                        @if (str_contains(Request::path(),$menu[$i]['url']))
                            <li><a href="{{route('dashboard')}}">Home</a></li>
                            <li><a href="{{url($menu[$i]['url'])}}">{{$menu[$i]['name']}}</a></li>
                            @break
                        @endif
                        @if(count($menu[$i]['submenu']) > 0)
                            @for($j = 0; $j < count($menu[$i]['submenu']); $j++)
                                    @if ( str_contains(Request::path(),$menu[$i]['submenu'][$j]['url']))
                                        <li><a href="{{route('dashboard')}}">Home</a></li>
                                        <li><a href="{{url($menu[$i]['url'])}}">{{$menu[$i]['name']}}</a></li>
                                        <li ><a href="{{url($menu[$i]['submenu'][$j]['url']) }}">{{$menu[$i]['submenu'][$j]['name'] }}</a></li>
                                        @break
                                    @endif
                            @endfor
                        @endif
                    @endfor
                </ol>

            @yield('content')

        </div>
    </div>
</div>

<script src="{{asset('bootstrap/assets/js/vendor/jquery.min.js')}}"></script>

<!-- Bootstrap core JavaScript
  ================================================== -->

<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{asset('bootstrap/assets/js/vendor/holder.min.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{asset('bootstrap/assets/js/ie10-viewport-bug-workaround.js')}}"></script>
<script>
    /**
     * 左侧菜单下拉效果
     */
    $('.nav-title').on('click',function () {
        var $this = $(this),
            $i = $this.find('i');
        if ($i.hasClass('nav-open')){
            $i.removeClass('nav-open').addClass('nav-close')
        } else {
            $i.removeClass('nav-close').addClass('nav-open')
        }
        $this.siblings().fadeToggle(300,'linear');
    })
</script>
@yield('script')
</body>
</html>
