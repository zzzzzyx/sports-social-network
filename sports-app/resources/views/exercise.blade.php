@extends('layouts.header')
@section('exerciseActive')
	class="active"
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
					<!-- <div class="subscribe">
                        <p>简要说说今天健身的心得吧！</p>
                    <div class="sub">
                        <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
                        <input type="submit" value="发表">
                    </div> -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div></form>
	</div>
	<!--blog end here-->
@endsection