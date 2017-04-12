@extends('layouts.header')
@section('personActive')
	class="active"
@endsection
@section('content')
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<h3>编辑个人信息</h3>
		</div>
	</div>
</div>
<!--contact end here-->
<!--get touch start here-->
<div class="get">
	<div class="container">
		<div class="edit-main">
			<form method="POST" action="{{ url('/account') }}">
			  <div class="col-md-6 get-left">

			  	 <p>姓名</p>
			  	 <input type="text" value="{{$name}}" name="name"/>
			  	 <p>手机号码</p>
			  	 <input type="text" value="{{$phone}}" name="phone"/>
			  	 <p>QQ号</p>
			  	 <input type="text" value="{{$qq}}" name="qq"/>
                 <p>个性签名</p>
			  	<textarea name="signature" />{{$signature}}</textarea>
				  <input hidden value="{{$_SERVER['REQUEST_URI']}}" name="returnUrl"/>
			  	 <input class="sbBtn" type="submit" value="保存">
			  </div></form>
			  <div class="col-md-6 edit-right">
              	<div class="col-md-2"><h3>头像</h3></div>
                <button type="button" class="btn btn-default">上传新头像</button>
             	 <div style="width:200px; height:200px;"><img src="images/user-self.jpg" width="100%" height="100%" /></div>
                 
		 	  </div>
		 	<div class="clearfix"> </div>	
		</div>
	</div>
</div>
</div>
<!--get touch end here-->
@endsection