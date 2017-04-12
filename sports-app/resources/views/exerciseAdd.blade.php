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

	<!--contact end here-->
	<!--get touch start here-->
	<div class="container-fluid">
	<form method="POST" action="{{ url('/exercise/add') }}"  onsubmit="return checkForm();" class="form-horizontal col-md-offset-2 col-md-8">
		<div class="form-group contact-main">
			<h3>记录新的健身</h3>
		</div>
		<div class="form-group">
			<label for="fname" class="col-md-3 control-label">标  题</label>
			<div class="col-md-9">
				<input name="title" type="text" class="form-control col-sm-8" id="fname" placeholder="请输入标题，长度小于15字" maxlength="15">
			</div>
		</div>
		<div class="form-group">
			<label for="spot" class="col-md-3 control-label">运动地点</label>
			<div class="col-md-9">
				<input type="text" name="spot" id="spot1" onblur="checkSpot()" class="form-control col-sm-8" placeholder="请输入地点，长度小于15字" maxlength="15"/>
			</div>
		</div>
		<div class="form-group">
			<label for="startTime" class="col-md-3 control-label">健身开始时间</label>
			<div class="col-md-9">
				<input type="datetime" class="form_datetime form-control col-sm-8" name="startTime" id="startTime" onblur="checkStartTime()">
			</div>

		</div>
		<div class="form-group">
			<label for="exerciseTime" class="col-md-3 control-label">健身时长</label>
			<div class="col-md-9">
				<input type="text" class="form-control" name="exerciseTime" id="exerciseTime" placeholder="请输入整数">
			</div>
		</div>

		<div class="form-group">
			<label for="calories" class="col-md-3 control-label">消耗卡路里</label>
			<div class="col-md-9">
				<input type="text" class="form-control" name="calories" id="calories" placeholder="请输入整数">
			</div>
		</div>
		<div class="form-group">
			<label for="label" class="col-md-3 control-label">运动标签</label>
			<div class="col-md-9">
				<input type="text" name="label" class="form-control" placeholder="请输入本次健身的标签名，用#隔开。如:  #夜跑#南大#南大跑协"/>
			</div>
		</div>

		<div class="form-group">
			<label for="description" class="col-md-3 control-label">说点什么</label>
			<div class="col-md-9">
				<textarea maxlength="140" name="description" class="form-control" rows="4" id="description" onblur="checkDescription()" placeholder="说点什么吧！（有多难？心情怎么样？有没有感受到提升？）"/></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-6 col-md-3">
				<input type="submit" class="btn btn-success col-sm-offset-2 col-sm-8" value="发送">
			</div>
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
	</form>
	</div>
	<!--get touch end here-->
@endsection