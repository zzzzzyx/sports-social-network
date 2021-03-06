﻿@extends('layouts.header')
@section('exerciseActive')
	class="active"
@endsection
@section('head_more')
    <meta name="keywords" content="健身,动态,数据">
    <meta name="description" content="在这里记录您每天的运动健身数据，管理并统计您的健身情况">
@endsection
@section('content')
	<!--single page start here-->
	<!--blog start here-->

	<div class="blog">
		<div class="container">
			<div class="blog-main">
				<div class="blog-top">
					<h3>健身详情</h3>
				</div>
				<div class="col-md-8 blog-left">
					<div class="blog-grid">
						<div class="grid-left">
							<?php
							echo "<p style=\"text-align: center;padding-top: 5px\">".date("H:i",strtotime($exercise->startTime))."</p>";
							echo "<h3 style=\"text-align: center\">".date("d",strtotime($exercise->startTime))."</h3>";
							?>
						</div>
						<div class="grid-right">
							<h3>{{$exercise->title}}</h3>
							<ul class="blog-list">
								<li><span class="mike"> </span><a href="{{url('/person/'.$launcherId.'/0')}}">{{$launcherName}}</a></li>

								@if(!$exercise->likerContainUserOrNot(Auth::user()))
									<li><span class="comm"> </span></span><a href="/exercise/single/{{$exercise->id}}/like?returnUrl={{$_SERVER['REQUEST_URI']}}">点赞 {{$exercise->getLikerNum()}}</a></li>
								@else
									<li><span class="comm"> </span></span><a href="/exercise/single/{{$exercise->id}}/like?returnUrl={{$_SERVER['REQUEST_URI']}}">取消点赞 {{$exercise->getLikerNum()}}</a></li>
								@endif
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="blog-para">
						<p>{{$exercise->description}}</p>
					</div>
					<div class="blog-contact">
						@if($blurUserList != null)
							<h3>已点赞者</h3>
							@foreach ($blurUserList as $blur)
								<div class="joinList"><a href="{{url('/person/'.$blur->id.'/0')}}"><div class= "user"> <img src="/images/user.jpg"> <span>{{$blur->name}}</span> </div></a></div>
							@endforeach
						@else
							<h3>快来做第一个点赞的人吧！</h3>
						@endif

						<div class="clearfix"></div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 blog-right">
					<h3>详细信息</h3>
					<ul class="blog-rig-list">
						<li><p>时长：{{$exercise->exerciseTime}}分钟</p></li>
						<li><p>地点：{{$exercise->spot}}</p></li>
						<li><p>运动量：{{$exercise->calories}}千卡路里</p></li>
						<li><p>相当于跑了：{{ceil($exercise->calories/303*10)/10}}公里</p></li>
					</ul>
					<h3>标签</h3>
					<ul class="popular-tag">
						<?php
						$tagList = explode("#", $exercise->label);
						foreach($tagList as $tag){
							echo "<li><span href=\"#\">".$tag."</span></li>";
						};

						?>
					</ul>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	</div>
	<!--single page end here-->
@endsection