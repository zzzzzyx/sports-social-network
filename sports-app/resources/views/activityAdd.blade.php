@extends('layouts.header')
@section('head_more')
	<link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	<meta name="keywords" content="健身,活动">
	<meta name="description" content="参与各种各样的活动，和小伙伴们一起健身吧！">
@endsection
@section('activityActive')
	class="active"
@endsection
@section('content')
	<script type="text/javascript">
		function checkTitle(){
			var x=document.getElementById("fname").value

			//1. 获取文本框的值
			//2. 验证格式是否合法
			//3. 根据不同的验证结果  提示不同的信息
			//使用正则表达式验证
			var exp=/^\S{1,15}$/;
			if(exp.test(x)){
				//合格
				document.getElementById("name_msg").innerHTML="";
				return true;
			}else{
				//不合格
				document.getElementById("name_msg").innerHTML="标题的长度在1到15个字符之间";
				return false;
			}
		}

		function checkPeoele(){
			var x=document.getElementById("people").value
			//1. 获取文本框的值
			//2. 验证格式是否合法
			//3. 根据不同的验证结果  提示不同的信息
			//使用正则表达式验证
			var exp=/^\d{1,3}$/;
			if(exp.test(x)){
				//合格
				document.getElementById("people_msg").innerHTML="";
				return true;
			}else{
				//不合格
				document.getElementById("people_msg").innerHTML="最多注册999个人，只能输入数字";
				return false;
			}
		}
		function checkDescription(){
			var x=document.getElementById("description").value
			//1. 获取文本框的值
			//2. 验证格式是否合法
			//3. 根据不同的验证结果  提示不同的信息
			//使用正则表达式验证
			var exp=/^\S{1,140}$/;
			if(exp.test(x)){
				//合格
				document.getElementById("description_msg").innerHTML="";
				return true;
			}else{
				//不合格
				document.getElementById("description_msg").innerHTML="描述的长度在1到140个字符之间";
				return false;
			}
		}
		function checkForm(){
			return checkTitle() && checkPeoele() && checkDescription();
		}
	</script>
	<!--contact start here-->
	<div class="contact">
		<div class="container">
			<div class="contact-main">
				<h3>发起活动</h3>
			</div>
		</div>
	</div>
	<!--contact end here-->
	<!--get touch start here-->
	<div class="get">
		<div class="container">
			<form method="POST" action="{{ url('/activity/add') }}" onsubmit="return checkForm();">
				<div class="get-main">
					<div class="col-md-6 get-left">
						<p>标题</p>
						<span id="name_msg" class="remind_msg"></span>
						<input name="title" type="text" value="" id="fname" onblur="checkTitle()" />
						<p>开始时间</p>
						<input name="startTime" size="16" type="text" value="" readonly class="form_datetime">
						<p>结束时间</p>
						<input name="endTime" size="16" type="text" value="" readonly class="form_datetime">
						<div class="clearfix" ></div>
						<p>参加人数</p>
						<span id="people_msg" class="remind_msg"></span>
						<div class="clearfix" ></div>
						<div class="inputHourhh">
							<div class="halfInput" ><input name="maxAttend" type="text" value="" id="people" onblur="checkPeoele()"/></div>
							<div class="hourhh"><span>人</span></div>
						</div>
						<div class="clearfix" ></div>
						<input hidden value="{{url('activity/list/0')}}" name="returnUrl"/>
						<input type="submit" value="发送">



					</div>
					<div class="col-md-6 get-right">
						<h4>活动描述</h4>
						<textarea  name="description" id="description" onblur="checkDescription()"/></textarea>
						<div class="clearfix" ></div>
						<span id="description_msg" class="remind_msg"></span>
					</div>
					<div class="clearfix"> </div>
				</div>
			</form>
		</div>
	</div>

	<!--get touch end here-->
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
@endsection