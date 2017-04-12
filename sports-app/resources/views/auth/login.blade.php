<!DOCTYPE html>
<head>
	<title>Login One</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<body class="templatemo-bg-gray">
	<div class="container">
		<div class="col-md-12">
			<h1 class="margin-bottom-15">登录到拜运动社交系统</h1>
			<form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form"  action="{{ url('/login') }}" method="post">
		        <div class="form-group">
		          <div class="col-xs-12">		            
		            <div class="control-wrapper">
		            	<label for="username" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
		            	<input type="text" class="form-control" id="username" name="email" placeholder="电子邮箱地址">

		            </div>		            	            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		            	<label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
		            	<input type="password" class="form-control" id="password" name="password" placeholder="密码">
						@if ($errors->has('email'))

						@endif
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
	             	<div class="checkbox control-wrapper">
	                	<label>
	                  		<input type="checkbox" name="remember"> 记住我的登陆状态
                		</label>
	              	</div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		          		<input type="submit" value="登录" class="btn btn-info">
						<a href="{{ url('/register') }}"><input type="button" value="注册" class="btn btn-success"></a>
		          		<a href="{{ url('/password/reset') }}" class="text-right pull-right">忘记密码？</a>
		          	</div>
		          </div>
		        </div>
				@if ($errors->has('email'))
				<hr>
				<div class="form-group">
					<div class="col-md-12">
							<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
					</div>
				</div>
				@endif
			</form>
			<div class="text-center">
		      	<a href="http://train.zzzzzyx.com" class="templatemo-create-new">切换到：学院管理系统 <i class="fa fa-arrow-circle-o-right"></i></a>
		      </div>
		</div>
	</div>
</body>
</html>