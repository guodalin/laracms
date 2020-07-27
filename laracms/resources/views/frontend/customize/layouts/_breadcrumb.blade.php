@php
$breadcrumb = breadcrumb();
@endphp
{{--<div class="layui-main">--}}
@if($breadcrumb)
<div class="layui-elip">
    <span class="layui-breadcrumb">
        <a href="/">首页</a>
        @foreach($breadcrumb as $item)
        <a href="{{$item->link}}">{{$item->title}}</a>
        @endforeach
        @yield('breadcrumb')
    </span>
</div>
@endif