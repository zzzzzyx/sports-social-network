@extends('layouts.header')
@section('content')
    <div class="contact">
        <div class="container">
            <div class="contact-main success-main">
                <h3>搜索失败！不存在这样的用户！</h3>
                <div class="return"><a href="{{ url('/') }}">点击这里返回主页</a></div>

            </div>
        </div>
    </div>
@endsection