@extends('layouts.header')
@section('personActive')
	class="active"
@endsection
@section('content')
<!--blog start here-->
<div class="blog">
	<div class="container">
		<div class="blog-main">
			<div class="blog-top">
				<h3><b>李洋</b> 的主页</h3>
			</div>
			<div class="col-md-8 blog-left">
		   <div class="blog-grid">
			   <div class="grid-left">
			      <h3>22</h3>
			      <p>Oct</p>
			   </div>
			   <div class="grid-right">
			   	 <a href="single.html"><h3>早上晨跑5公里</h3></a>
			   	   <ul class="blog-list">
			   	   	  <li><span class="mike"> </span><a href="#">李洋</a></li>
			   	   	  <li><span class="box"> </span><a href="#">评论 0</a></li>
			   	   	   <li><span class="comm"> </span><a href="#">点赞 7</a></li>
			   	   </ul>
			   	   <p>昨天跑太多，腿有点酸，今天降低运动量。另外跑完后吃了个包子，浑身舒爽</p>
			   </div>
			 <div class="clearfix"> </div>
			 </div>
              <div class="blog-section">
			  <div class="grid">
			 	 <div class="grid-left">
			      <h3>18</h3>
			      <p>Oct</p>
			   </div>
			   <div class="grid-right">
			   	 <a href="single.html"><h3>10.18操场7公里</h3></a>
			   	   <ul class="blog-list">
			   	   	  <li><span class="mike"> </span><a href="#">李洋</a></li>
			   	   	  <li><span class="box"> </span><a href="#">评论 0</a></li>
			   	   	   <li><span class="comm"> </span><a href="#">点赞 7</a></li>
			   	   </ul>
			   	   <p>今天操场下了点小雨，跑的人少了很多。但是感觉自己还是坚持下来了，很了不起！</p>
			   </div>
			   <div class="clearfix"> </div>
			  </div>
			 </div>
			 <div class="blog-section">
			  <div class="grid">
			 	 <div class="grid-left">
			      <h3>10</h3>
			      <p>Oct</p>
			   </div>
			 	 <div class="grid-right">
			   	 <a href="single.html"><h3>健身房2小时高强度锻炼</h3></a>
			   	   <ul class="blog-list">
			   	   	  <li><span class="mike"> </span><a href="#">李洋</a></li>
			   	   	  <li><span class="box"> </span><a href="#">评论 2</a></li>
			   	   	   <li><span class="comm"> </span><a href="#">点赞 4</a></li>
			   	   </ul>
			   	   <p>南京刮台风！又好久没运动了！今天逼自己去健身房锻炼一下，不然整个人都要生锈了。</p>
			   </div>
			   <div class="clearfix"> </div>
			  </div>
			 </div>
			  <div class="blog-section">
			  <div class="grid">
			 	 <div class="grid-left">
			      <h3>08</h3>
			      <p>Oct</p>
			   </div>
			 	 <div class="grid-right">
			   	 <a href="single.html"><h3>课前晨跑</h3></a>
			   	   <ul class="blog-list">
			   	   	  <li><span class="mike"> </span><a href="#">李洋</a></li>
			   	   	  <li><span class="box"> </span><a href="#">评论 0</a></li>
			   	   	   <li><span class="comm"> </span><a href="#">点赞 24</a></li>
			   	   </ul>
			   	   <p>6点就起床了，早早跑完5公里买个包子去上课,浑身美滋滋。</p>
			   </div>
			   <div class="clearfix"> </div>
			  </div>
			 </div>
			  <div class="blog-section">
			 <div class="grid">
			 	 <div class="grid-left">
			      <h3>27</h3>
			      <p>Sept</p>
			   </div>
			 	 <div class="grid-right">
			   	 <a href="single.html"><h3>晚上俯卧撑4组，仰卧起坐200个</h3></a>
			   	   <ul class="blog-list">
			   	   	  <li><span class="mike"> </span><a href="#">李洋</a></li>
			   	   	  <li><span class="box"> </span><a href="#">评论 0</a></li>
			   	   	   <li><span class="comm"> </span><a href="#">点赞 5</a></li>
			   	   </ul>
			   	   <p>鼓楼健身房很专业！为开设健身房的校领导点个赞！话说有人知道今晚的web大作业啥时候交吗？</p>
			   </div>
			   <div class="clearfix"> </div>
			  </div>
			 </div>
			 
			  
			 <div class="pag-nations">
					<ul class="p_n-list">
						<li class="neg">Prev</li>
						<li class="neg">1</li>
						<li class="neg">Next</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 blog-right"> 
				<h3>李洋</h3>
                <div style="width:200px; height:200px;"><img src="images/liyang.jpg" width="100%" height="100%" /></div>
                <div class="hh"><span>等阶</span></div> <div class="ss"><span>惊为天人</span></div><br>
                <div class="hh"><span>总健身时长</span></div> <div class="ss"><span>127小时</span></div><br>
                <div class="hh"><span>相当于跑了</span></div> <div class="ss"><span>4722公里</span></div><br>
                <div class="hh"><span>个性签名</span></div> <div class="ss"><span>没有什么是无法跨越的！苏宁战斗！</span></div>
                <div class="btn-group bbg">
  					<button type="button" class="btn btn-danger">删除好友</button>
  					<a href="projects.html"><button type="button" class="btn btn-success">发送消息</button></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
</div>
<!--blog end here-->
@endsection