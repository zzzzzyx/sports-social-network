@extends('layouts.header')
@section('content')
    <div class="contact">
        <div class="container">
            <div class="contact-main success-main">
                <h3>操作成功！</h3>
                <div class="return"><a href="{{ url($returnUrl) }}">点击这里返回</a></div>

            </div>
        </div>
    </div>
@endsection