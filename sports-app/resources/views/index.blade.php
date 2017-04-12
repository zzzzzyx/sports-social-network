@extends('layouts.header')
@section('head_more')
    <meta name="keywords" content="健身,活动,社交,管理">
    <meta name="description" content="使用拜运动来管理您的健身活动！">
@endsection
@section('mainPageActive')
    class="active"
@endsection
@section('content')

    <!--banner start here-->
    <div class="banner">
        <div class="container">
            <div class="banner-main">
                <h1>{{floor($statistic->exercise_minute/60)}}</h1>
                <p>总健身小时数</p>
                <div class="bwn">
                    <a href="{{url('/exercise/add')}}"> 立即健身 </a>
                </div>
            </div>
        </div>
    </div>
    <!--banner end here-->
    <!--below banner start here-->
    <div class="section1">
        <div class="col-md-4 below-coloum">
            <h1>{{$statistic->continuous_exercise_day}}</h1>
            <p>连续锻炼天数</p>
        </div>
        <div class="col-md-3 below-grace">
            <h1>{{$statistic->overall_exercise_day}}</h1>
            <p>总锻炼天数</p>
        </div>
        <div class="col-md-5 below-side">
            <h1>{{$statistic->getLapNum()}}</h1>
            <p>锻炼量相当于已跑的公里数</p>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="section2">
        <div class="col-md-7 below-left">
            <div class="below-top">
                <h2>全站搜索用户</h2>
                <form method="POST" action="{{url('/search')}}">
                    <input type="text" value="" name="context"/>
                    <input type="submit" value="搜索">
                    {{--<button type="button" class="btn" onclick="window.location.href=(document.URL + 'search')">搜索</button></a>--}}
                </form>
                <p>根据昵称搜索其他用户，以查看，添加好友</p>
            </div>
            <div class="below-bottom">
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-5 below-right">
            <div class="bg">
                <h1>「{{$statistic->getGrade()}}」<a href="{{url('/level')}}"><img src="images/help.png" style="width: 20px;margin-top:-60px"/></a></h1>
                <p>等阶</p>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--below banner end here-->
    @if(count($exerciseList) >= 3)
        <!--news end here-->
        <div class="news">
            <div class="container">
                <div class="news-main">
                    <div class="news-top">
                        <h3>最近健身</h3>
                    </div>
                    <div class="news-bottom">
                        @for($i = 0 ; $i < 3 ; $i ++)
                            <div class="col-md-4 new-left">
                                <div class="notch">
                                    <small>{{date("d",strtotime($exerciseList[$i]->startTime))}}</small>
                                </div>
                                <div class="notch-h"> </div>
                                <h3>{{date("F",strtotime($exerciseList[$i]->startTime))}}</h3>
                                <h4>{{$exerciseList[$i]->title}}</h4>
                                <p>{{$exerciseList[$i]->description}}</p>
                                <div class="button">
                                    <a href="{{ url('/exercise/single/'.$exerciseList[$i]->id) }}">MORE</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        @endfor
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--/news end here-->
    @endif
@endsection