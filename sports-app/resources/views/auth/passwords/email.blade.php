<!DOCTYPE html>
<head>
	<title>Forgot Password</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="../css/templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<body class="templatemo-bg-gray">
	<div class="container">
		<div class="col-md-12">
			<h1 class="margin-bottom-15">找回密码</h1>
			<form class="form-horizontal templatemo-forgot-password-form templatemo-container" role="form" action="#" method="post">	
				<div class="form-group">
		          <div class="col-md-12">
		          	请输入您的电子邮箱地址（此功能尚未完成）：
		          </div>
		        </div>		
		        <div class="form-group">
		          <div class="col-md-12">
		            <input type="text" class="form-control" id="email" placeholder="您的电子邮箱地址">
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <input type="submit" value="提交" class="btn btn-danger">
		          </div>
		        </div>
		      </form>
            <div class="text-center">
                <a href="{{ url('/login') }}" class="templatemo-create-new">登录 <i class="fa fa-arrow-circle-o-right"></i></a>
            </div>
		</div>
	</div>
</body>
</html>