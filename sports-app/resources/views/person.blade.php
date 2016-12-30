@extends('layouts.header')
@section('personActive')
	class="active"
@endsection
@section('head_more')
	<meta name="keywords" content="健身,个人,主页">
	<meta name="description" content="发布您的健身动态，分享给小伙伴们吧！">
@endsection
@section('content')
	<!--blog start here-->
	<div class="blog">
		<div class="container">
			<div class="blog-main">
				<div class="blog-top">
					<h3><b>{{$name}}</b> 的主页</h3>
				</div>
				<div class="col-md-8 blog-left">
					@if($noExercise)
						<p class="noExercise">他很懒哦，还没有进行任何健身呢！</p>
						@else
					@include('layouts.exercise_left')
					@include('layouts.pager',['urlPrefix' => 'person/'.$personId.'/'])
						@endif
				</div>
				<div class="col-md-4 blog-right">
					<h3>{{$name}}</h3>
					<div style="width:200px; height:200px;"><img src="/images/liyang.jpg" width="100%" height="100%" /></div>
					<div class="hh"><span>等阶</span></div> <div class="ss"><span>{{$statistic->getGrade()}}</span></div><br>
					<div class="hh"><span>总健身时长</span></div> <div class="ss"><span>{{floor($statistic->exercise_minute/60)}}小时</span></div><br>
					<div class="hh"><span>相当于跑了</span></div> <div class="ss"><span>{{$statistic->getLapNum()}}公里</span></div><br>
					<div class="hh"><span>个性签名</span></div>
					@if($signature != "")
						<div class="ss"><span>{{$signature}}</span></div>
					@else
						<div class="ss" style="color:orangered;"><span>他还没有设置个性签名哦！</span></div>
					@endif

					<div class="btn-group bbg">
						@if($friendship_id > 0 )
							<button type="button" class="btn btn-danger" onclick="window.location.href=(document.URL + '/delete')">删除好友</button>
							<a href="{{url('friend/chatwith/'.$personId)}}"><button type="button" class="btn btn-success">发送消息</button></a>
						@elseif($friendship_id == null)
							<button type="button" class="btn btn-danger" onclick="window.location.href=(document.URL + '/add')">加为好友</button>
						@endif
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	</div>
	<!--blog end here-->
@endsection