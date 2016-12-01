@extends('layouts.header')
@section('head_more')
	<link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
@endsection
@section('exerciseActive')
	class="active"
@endsection
@section('content')
	<!--contact start here-->
	<div class="contact">
		<div class="container">
			<div class="contact-main">
				<h3>记录新的健身</h3>
			</div>
		</div>
	</div>
	<!--contact end here-->
	<!--get touch start here-->
	<form method="POST" action="{{ url('/exercise/add') }}">
		<div class="get">
			<div class="container">

				<div class="get-main">
					<div class="col-md-6 get-left">
						<p>标题</p>
						<input type="text" value="" name="title"/>
						<p>运动地点</p>
						<input type="text" value="" name="spot"/>
						<p>健身开始时间</p>
						<input size="16" type="text" value="" readonly class="form_datetime" name="startTime">
						<div class="aaa"><span>健身时长</span></div>                 <div class="bbb"><span>预估运动量</span></div>
						<div class="clearfix" ></div>
						<div class="inputHourhh">
							<div class="halfInput"><input  type="text" value="" name="exerciseTime"/></div>
							<div class="hourhh"><span>分钟</span></div>
							<div class="halfInput"><input  type="text" value="" name="calories"/></div>
							<div class="hourhh"><span>千卡路里</span></div>
						</div>
						<div class="kindofsport"><p>运动标签 <strong>(请输入本次健身的标签名，用#隔开。如:  #夜跑#南大#南大跑协)</strong></p></div>
						<input type="text" value="" name="label"/>
						<input type="submit" value="发送">

					</div>
					<div class="col-md-6 get-right">
						<h4>说点什么吧！（有多难？心情怎么样？有没有感受到提升？）</h4>
						<textarea name="description"/> </textarea>
					</div>
					<div class="clearfix"> </div>
				</div>
				<script type="text/javascript">
					$(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
				</script>
				<script type="text/javascript" src="/js/bootstrap-datetimepicker.js"></script>
				<script type="text/javascript" src="/js/locales/bootstrap-datetimepicker.fr.js"></script>
				<script type="text/javascript" src="/js/locales/bootstrap-datetimepicker.zh_CN.js"></script>
				<script type="text/javascript">
					$('.form_datetime').datetimepicker({
						//language:  'fr',
						weekStart: 1,
						todayBtn:  1,
						autoclose: 1,
						todayHighlight: 1,
						startView: 2,
						forceParse: 0,
						showMeridian: 1
					});
					$('.form_date').datetimepicker({
						language:  'fr',
						weekStart: 1,
						todayBtn:  1,
						autoclose: 1,
						todayHighlight: 1,
						startView: 2,
						minView: 2,
						forceParse: 0
					});
					$('.form_time').datetimepicker({
						language:  'fr',
						weekStart: 1,
						todayBtn:  1,
						autoclose: 1,
						todayHighlight: 1,
						startView: 1,
						minView: 0,
						maxView: 1,
						forceParse: 0
					});
				</script>
			</div>
		</div>
	</form>

	<!--get touch end here-->
@endsection