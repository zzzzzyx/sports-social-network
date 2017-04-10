@extends('layouts.header')
@section('activityActive')
	class="active"
@endsection
@section('head_more')
	<meta name="keywords" content="健身,活动">
	<meta name="description" content="参与各种各样的活动，和小伙伴们一起健身吧！">
@endsection
@section('content')
<!--single page start here-->
<!--blog start here-->
<?php
function showLastTime($endTime){
	$datetime1 = date_create(date("Y-m-d"));
	$datetime2 = date_create(substr($endTime,0,10));
	$interval = date_diff($datetime1, $datetime2);
	if($interval->invert == 0){echo $interval->format('距离活动结束还有 %a 天！'); return true;}
	else{echo '很遗憾，活动已经结束了。';return false;}
}
function isover($endTime){
	$datetime1 = date_create(date("Y-m-d"));
	$datetime2 = date_create(substr($endTime,0,10));
	$interval = date_diff($datetime1, $datetime2);
	if($interval->invert == 0){return false;}
	else{return true;}
}
?>
<div class="blog">
	<div class="container">
		<div class="blog-main">
			<div class="blog-top">
			<h3>活动详情</h3>
            @if(isover($activity->endTime))
					<button type="button" class="btn btn-warning btn-lg disabled">已经结束</button>
				@elseif($activity->users_id == $presentUserId || $userGrade == 0)
					<button type="button" class="btn btn-danger btn-lg" onclick="window.location.href=(document.URL + '/delete')">删除活动</button>
				@elseif($isParticipant)
					<button type="button" class="btn btn-danger btn-lg" onclick="window.location.href=(document.URL + '/leave')">现在退出</button>
				@else
					<button type="button" class="btn btn-info btn-lg" onclick="window.location.href=(document.URL + '/attend')">立即加入</button>
				@endif
			</div>
            <div class="clearfix"></div>
			<div class="col-md-8 blog-left">
		   <div class="blog-grid">
			   <div class="grid-left">
				   <?php
				   echo "<h3>".date("d",strtotime($activity->startTime))."</h3>";
				   echo "<p>".date("M",strtotime($activity->startTime))."</p>";
				   ?>
			   </div>
			   <div class="grid-right">
			   		<h3>{{$activity->title}}</h3>
			   	   <ul class="blog-list">
			   	   	  <li><span class="mike"> </span><a href="{{url('/person/'.$activity->users_id.'/0')}}">发起人：{{$launcherName}}</a></li>
			   	   	  <li><span class="box"> </span><a href="#">参与人数： {{$activity->hasAttended}}/{{$activity->maxAttend}}</a></li>
			   	   	   <li><span class="comm"> </span><a href="#">浏览热度：{{$activity->watchTime}}人次</a></li>
			   	   </ul>
			   	   <p><?php
					   showLastTime($activity->endTime);
					   ?></p>
			   </div>
			 <div class="clearfix"> </div>
			 </div>
			 <div class="blog-para">
								<p>{{$activity->description}}</p>
            </div>
            <div class="blog-contact">
            	<h3>已参加者</h3>
				@foreach ($blurUserList as $blur)
					<div class="joinList"><a href="{{url('/person/'.$blur->id.'/0')}}"><div class= "user"> <img src="/images/user.jpg"> <span>{{$blur->name}}</span> </div></a></div>
				@endforeach

                <div class="clearfix"></div>
            </div>
             <div class="clearfix"> </div>
			</div>
			<div class="col-md-4 blog-right"> 
				<h3>时间信息</h3>
				<ul class="blog-rig-list">
					<li><p>开始时间：{{$activity->startTime}}</p></li>
					<li><p>结束时间：{{$activity->endTime}}</p></li>
				</ul>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
</div>
<!--single page end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="footer-navg">
				<ul>
					<li><a href="index.html">主页</a></li>
					<li><a class="active" href="events.html">活动</a></li>
					<li><a href="blog.html">健身与动态</a></li>
					<li><a href="projects.html">好友</a></li>
					<li><a href="myself.html">个人</a></li>
                    <li><a href="gallery.html">账户</a></li>
					<li><a href="contact.html">意见反馈</a></li>
				</ul>
			</div>
			<div class="footer-top">
				<div class="col-md-4 footer-left">
					<h3>在社交网站上关注拜运动团队</h3>
				<ul>
					<li><a href="#"><span class="a"> </span></a></li>
					<li><a href="#"><span class="b"> </span></a></li>
					<li><a href="#"><span class="c"> </span></a></li>
				</ul>
				</div>
				<div class="col-md-4 footer-middle">
					<h3>邮件订阅</h3>
					<input type="text" value="输入邮箱" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '输入邮箱';}"/>
					<input type="submit" value="订阅">
				</div>
				<div class="col-md-4 footer-right">
					<h3>联系我们</h3>
					<p>地址 : 南京大学鼓楼校区</p>
					<p>电邮 : zzzzzyx@outlook.com</p>
				</div>
			<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<p>2014 &copy Template by <a href="http://w3layouts.com/"> W3layouts </a> </p>
			</div>
		<div class="clearfix"> </div>
		<script type="text/javascript">
										$(document).ready(function() {
											/*
											var defaults = {
									  			containerID: 'toTop', // fading element id
												containerHoverID: 'toTopHover', // fading element hover id
												scrollSpeed: 1200,
												easingType: 'linear' 
									 		};
											*/
											
											$().UItoTop({ easingType: 'easeOutQuart' });
											
										});
									</script>
						<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
	</div>
</div>
<!--/footer end here-->
</body>
</html>
@endsection