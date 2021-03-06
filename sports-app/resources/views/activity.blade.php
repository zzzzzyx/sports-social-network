@extends('layouts.header')
@section('head_more')
	<meta name="keywords" content="健身,活动">
	<meta name="description" content="参与各种各样的活动，和小伙伴们一起健身吧！">
@endsection
@section('activityActive')
	class="active"
	@endsection
	@section('content')
	<?php
	function showLastTime($endTime){
		$datetime1 = date_create(date("Y-m-d"));
		$datetime2 = date_create(substr($endTime,0,10));
		$interval = date_diff($datetime1, $datetime2);
		if($interval->invert == 0){echo $interval->format('距离活动结束还有 %a 天！');}
		else{echo '很遗憾，活动已经结束了。';}
	}
	?></p>
	<!--events start here-->
	<div class="events">
		<div class="container">
			<div class="event-main">
				<div class="event-head">
					<h3>热门活动</h3>
					@if($userGrade > 2 || $userGrade == 0)
						<a href="{{ url('/activity/add') }}"><button type="button" class="btn btn-info btn-lg">发起活动</button></a>
						@else
						<button type="button" class="btn btn-danger btn-lg disabled" title="提示">无权限发起活动</button></a>
						@endif
				</div>
				<div class="clearfix"></div>
				<div class="event-top">
					<div class="e-left col-md-6 mus">
						<a href="{{ url('/activity/' .strval($activityTrioList[0]->id))}}"><h4>{{$activityTrioList[0]->title}}</h4></a>

						<p>{{$activityTrioList[0]->description}}</p><br>
						<p class="rder"><?php showLastTime($activityTrioList[0]->endTime);?> 参与人数： {{$activityTrioList[0]->hasAttended}}/{{$activityTrioList[0]->maxAttend}}<p>
							<a href="{{ url('/activity/' .strval($activityTrioList[0]->id))}}"><button type="button" class="btn btn-success">我要参加</button></a>
					</div>
					<div class="col-md-6  e-right">

						<img src="/images/e4.jpg" alt=""/>
					</div>

					<div class="clearfix"> </div>
				</div>
				@if(count($activityTrioList) > 1)
					<div class="event-top">
						<div class="col-md-6  e-left">
							<img src="/images/e2.jpg" alt=""/>
						</div>
						<div class="col-md-6  e-right">
							<a href="{{ url('/activity/' .strval($activityTrioList[1]->id))}}"><h4>{{$activityTrioList[1]->title}}</h4></a>

							<p>{{$activityTrioList[1]->description}}</p><br>
							<p class="rder"><?php showLastTime($activityTrioList[1]->endTime);?> 参与人数： {{$activityTrioList[1]->hasAttended}}/{{$activityTrioList[1]->maxAttend}}<p>
								<a href="{{ url('/activity/' .strval($activityTrioList[1]->id))}}"><button type="button" class="btn btn-success">我要参加</button></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				@endif
				@if(count($activityTrioList) > 2)
					<div class="event-top">
						<div class="col-md-6  e-left">
							<a href="{{ url('/activity/' .strval($activityTrioList[2]->id))}}"><h4>{{$activityTrioList[2]->title}}</h4></a>

							<p>{{$activityTrioList[2]->description}}</p><br>
							<p class="rder"><?php showLastTime($activityTrioList[2]->endTime);?> 参与人数： {{$activityTrioList[2]->hasAttended}}/{{$activityTrioList[2]->maxAttend}}<p>
								<a href="{{ url('/activity/' .strval($activityTrioList[2]->id))}}"><button type="button" class="btn btn-success">我要参加</button></a>
						</div>
						<div class="col-md-6  e-right">

							<img src="/images/e3.jpg" alt=""/>
						</div>

						<div class="clearfix"> </div>
					</div>
				@endif

			</div>
			@include('layouts.pager',['urlPrefix' => '/activity/list/'])
		</div>
		<!--events end here-->
	</div>
@endsection