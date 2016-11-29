@extends('layouts.header')
@section('mainPageActive')
class="active"
@endsection
@section('content')
<!--banner start here-->
<div class="banner">
    <div class="container">
        <div class="banner-main">
            <h1>{{$exerciseHour}}</h1>
            <p>总健身小时数</p>
            <div class="bwn">
                <a href="recordNew.html"> 立即健身 </a>
            </div>
        </div>
    </div>
</div>
<!--banner end here-->
<!--below banner start here-->
<div class="section1">
    <div class="col-md-4 below-coloum">
        <h1>{{$continuousExer}}</h1>
        <p>连续锻炼天数</p>
    </div>
    <div class="col-md-3 below-grace">
        <h1>{{$overallExer}}</h1>
        <p>总锻炼天数</p>
    </div>
    <div class="col-md-5 below-side">
        <h1>{{$kilometers}}</h1>
        <p>锻炼量相当于已跑的公里数</p>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="section2">
    <div class="col-md-7 below-left">
        <div class="below-top">
            <h2>全站搜索</h2>
            <form>

                <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
                <!--<input type="submit" value="搜索">-->
                <a href="search.html"><button type="button" class="btn">搜索</button></a>
            </form>
            <p>快速搜索活动，好友，健身数据，功能设置等内容</p>
        </div>
        <div class="below-bottom">
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="col-md-5 below-right">
        <div class="bg">
            <h1>{{$grade}}</h1>
            <p>等阶</p>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!--below banner end here-->
<!--news end here-->
<div class="news">
    <div class="container">
        <div class="news-main">
            <div class="news-top">
                <h3>最近健身</h3>
            </div>
            <div class="news-bottom">
                <div class="col-md-4 new-left">
                    <div class="notch-b">
                        <small class="brown">22</small>
                    </div>
                    <div class="notch-b-h"> </div>
                    <h3>October</h3>
                    <h4>Rigi山登山</h4>
                    <p>从琉森坐包含在通票内的游船到Rigi山脚的小镇，然后坐免费的小火车到Rigi山顶。然后观光之后徒步走了下来。空气很清新！</p>
                    <div class="button-b">
                        <a href="#">MORE</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 new-left">
                    <div class="notch">
                        <small>08</small>
                    </div>
                    <div class="notch-h"> </div>
                    <h3>October</h3>
                    <h4>足协杯软院vs地海</h4>
                    <p>12:30-14:00的60分钟足球赛，运动量大，今晚就不跑步了！另外2:0赢了，很开心。各位共勉！</p>
                    <div class="button">
                        <a href="#">MORE</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 new-left">
                    <div class="notch">
                        <small>25</small>
                    </div>
                    <div class="notch-h"> </div>
                    <h3>September</h3>
                    <h4>鼓楼操场第一跑！</h4>
                    <p>自从搬到鼓楼一个月来还没跑步。因此愉快地决定感受一下鼓楼老大爷运动的氛围！首战5公里热身一下吧！</p>
                    <div class="button">
                        <a href="#">MORE</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--/news end here-->
@endsection