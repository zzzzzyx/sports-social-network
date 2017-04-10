@extends('layouts.header')
@section('content')
    <div class="contact">
        <div class="container">
            <div class="contact-main success-main">
                <h3>您还没有好友！请在主页搜索并添加好友！</h3>
                <div class="return"><a href="{{ url('/') }}">点击这里返回主页</a></div>

            </div>
        </div>
    </div>
@endsection