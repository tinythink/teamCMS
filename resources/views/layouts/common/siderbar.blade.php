{{--<h4 {{ str_contains(Request::path(),'dashboard')  ? 'active' : ''}}></h4>--}}
<ul class="nav nav-sidebar" style="margin-bottom: 0;margin-top: -20px;">
    <li class="{{ str_contains(Request::path(),'dashboard')  ? 'active' : ''}}"><a href="{{route('dashboard')}}">Dashboard</a></li>
</ul>

@for($i = 0; $i < count($menu); $i++)
<ul class="nav nav-sidebar">
    {{--@if ( !(str_contains(Request::path(),'')) )--}}
        {{--<h2>ss</h2>--}}
    {{--@endif--}}
    <li class="nav-title"><a href="javascript:void(null)"> {{$menu[$i]['name']}} <span class="sr-only">(current)</span> &nbsp;&nbsp;<i class="glyphicon  glyphicon-menu-down"></i></a></li>

    @if(count($menu[$i]['submenu']) > 0)
        @for($j = 0; $j < count($menu[$i]['submenu']); $j++)

        <li class="{{ str_contains(Request::path(),$menu[$i]['submenu'][$j]['url'])  ? 'active' : ''}}"><a href="{{url($menu[$i]['submenu'][$j]['url'])}}">{{$menu[$i]['submenu'][$j]['name']}}</a></li>
        @endfor
    @endif

</ul>
@endfor
