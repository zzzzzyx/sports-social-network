@extends('layouts.header')
@section('head_more')
	<link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
@endsection
@section('activityActive')
	class="active"
@endsection
@section('content')
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
		<form method="POST" action="{{ url('/activity/add') }}">
		<div class="get-main">
			  <div class="col-md-6 get-left">
			  	 <p>标题</p>
			  	 <input name="title" type="text" value=""/>
			  	 <p>开始时间</p>
    			 <input name="startTime" size="16" type="text" value="" readonly class="form_datetime">
                 <p>结束时间</p>
    			 <input name="endTime" size="16" type="text" value="" readonly class="form_datetime">
                 <div class="aaa"><span>参加人数</span></div>
                 <div class="clearfix" ></div> 
                 <div class="inputHourhh">
                 	<div class="halfInput"><input name="maxAttend" type="text" value=""/></div>
                 	<div class="hourhh"><span>人</span></div>
                 </div>
                 <div class="clearfix" ></div> 
                 <input type="submit" value="发送">



			  </div>
			  <div class="col-md-6 get-right">
			  	<h4>活动描述</h4>
			  	<textarea  name="description"/> </textarea>
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