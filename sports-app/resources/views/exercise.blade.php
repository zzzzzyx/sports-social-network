@extends('layouts.header')
@section('exerciseActive')
	class="active"
@endsection
@section('head_more')
	<meta name="keywords" content="健身,动态,数据">
	<meta name="description" content="在这里记录您每天的运动健身数据，管理并统计您的健身情况">
@endsection
@section('content')
	<!--blog start here-->

	<form method="POST" action="{{url('/search')}}">
	<div class="blog">
		<div class="container">
			<div class="blog-main">
				<div class="blog-top">
				</div>
				<div class="col-md-8 blog-left">
					@include('layouts.exercise_left')
					@include('layouts.pager',['urlPrefix' => '/exercise/'])
				</div>
				<div class="col-md-4 blog-right">

					<div class="sear">

						<input type="text" value="搜索好友" name="context"/>
						<input type="submit" value="">
					</div>

					<div class="col-md-12 btrnnnn"><a href="{{url('/exercise/add')}}"><button type="button" class="btn btn-success recordBtn">记录新的健身</button></a></div>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div></form>
	</div>
	<!--blog end here-->
@endsection