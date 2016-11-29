@extends('layouts.header')
@section('activityActive')
	class="active"
@endsection
@section('content')
<!--events start here-->
<div class="events">
	<div class="container">
		<div class="event-main">
			<div class="event-head">
				<h3>热门活动</h3>
                <a href="startEvent.html"><button type="button" class="btn btn-info btn-lg">发起活动</button></a>
			</div>
            <div class="clearfix"></div>
			<div class="event-top">
            <div class="e-left col-md-6 mus">
				<a href="singleEvent.html"><h4>参加南京大学晚上约跑活动送大奖！</h4></a>
                
				<p>本活动仅限南京大学学生参加，由南京大学跑步协会鼓楼分会独家主办。从2016.10.1到2016.12.31号，每晚8:00-9:00我们将在操场组织跑步活动，并免费为活动报名者送上一瓶怡宝矿泉水！每天都坚持参加的跑步者将会在12.31号晚上获得“铁人”勋章一枚！敬请关注南大跑协公众号获取详情！</p><br>
                <p class="rder">距离活动结束还有 07 天！ 参与人数： 9/30<p>
                <a href="singleEvent.html"><button type="button" class="btn btn-success">我要参加</button></a>
			</div>
			<div class="col-md-6  e-right">
				
				<img src="images/e4.jpg" alt=""/>
			</div>
			
			<div class="clearfix"> </div>
			</div>
            
			<div class="event-top">
			<div class="col-md-6  e-left">
				<img src="images/e2.jpg" alt=""/>
			</div>
			<div class="col-md-6  e-right">
				<a href="singleEvent.html"><h3>2016南京马拉松南京大学组队！</h3></a>
                
				<p>大家好！我是南大的一名同学，特别想参加这个活动，希望能找到几个同学和我一起参加，做个伴，谢谢！以后也能一起多多交流跑步的心得</p><br>
                <p class="rder">距离活动结束还有 30 天！ 参与人数： 3/5<p>
                <a href="singleEvent.html"><button type="button" class="btn btn-success">我要参加</button></a>
			     </div>
			<div class="clearfix"> </div>
			</div>
			<div class="event-top">
            <div class="col-md-6  e-left">
				<a href="singleEvent.html"><h4>这个月减肥，有妹子愿意陪我一起跑吗？</h4></a>
                
				<p>我是南大软圆满苦逼的被作业压身的孩子，每天烦死了，希望能通过跑步缓解压力，求跑伴啊啊啊啊啊啊啊啊啊啊啊！！！</p><br>
                <p class="rder">距离活动结束还有 35 天！ 参与人数： 0/1<p>
                <a href="singleEvent.html"><button type="button" class="btn btn-success">我要参加</button></a>
			</div>
			<div class="col-md-6  e-right">
				
				<img src="images/e3.jpg" alt=""/>
			</div>
			
			<div class="clearfix"> </div>
			</div>
            
	</div>
    <div class="eventpn pag-nations">
					<ul class="p_n-list">
						<li class="neg">Prev</li>
						<li class="neg">1</li>
						<li class="neg">Next</li>
					</ul>
				</div>
</div>
<!--events end here-->
@endsection