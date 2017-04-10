@extends('layouts.header')
@section('head_more')
	<link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	<meta name="keywords" content="健身,动态,数据，添加">
	<meta name="description" content="在这里记录您每天的运动健身数据，管理并统计您的健身情况">
@endsection
@section('exerciseActive')
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
		function checkSpot(){
			var x=document.getElementById("spot").value
			//1. 获取文本框的值
			//2. 验证格式是否合法
			//3. 根据不同的验证结果  提示不同的信息
			//使用正则表达式验证
			var exp=/^\S{1,15}$/;
			if(exp.test(x)){
				//合格
				document.getElementById("spot_msg").innerHTML="";
				return true;
			}else{
				//不合格
				document.getElementById("spot_msg").innerHTML="输入的长度在1到15个字符之间";
				return false;
			}
		}
		function checkStartTime(){
				return true;
		}
		function checkForm(){
			return checkTitle() && checkSpot() && checkDescription() && checkStartTime();
		}
	</script>
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
	<form method="POST" action="{{ url('/exercise/add') }}"  onsubmit="return checkForm();">
		<div class="get">
			<div class="container">

				<div class="get-main">
					<div class="col-md-6 get-left">
						<p>标题</p>
						<span id="name_msg" class="remind_msg"></span>
						<input name="title" type="text" value="" id="fname" onblur="checkTitle()" />
						<div class="clearfix" ></div>
						<p>运动地点</p>
						<span id="spot_msg" class="remind_msg"></span>
						<input type="text" value="" name="spot" id="spot" onblur="checkSpot()" />
						<div class="clearfix" ></div>
						<p>健身开始时间</p>
						<span id="startTime" class="remind_msg"></span>
						<input size="16" type="text" value="" readonly class="form_datetime" name="startTime" id="startTime" onblur="checkStartTime()">
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
						<textarea  name="description" id="description" onblur="checkDescription()"/></textarea>
						<div class="clearfix" ></div>
						<span id="description_msg" class="remind_msg"></span>
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