@extends('layouts.header')
@section('exerciseActive')
	class="active"
@endsection
@section('content')
<!--blog start here-->
<div class="blog">
	<div class="container">
		<div class="blog-main">
			<div class="blog-top">
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
			   	   	  <li><span class="mike"> </span><a href="person.html">李洋</a></li>
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
			   	   	  <li><span class="mike"> </span><a href="person.html">李洋</a></li>
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
			      <h3>13</h3>
			      <p>Oct</p>
			   </div>
			 	 <div class="grid-right">
			   	 <a href="single.html"><h3>Rigi山登山</h3></a>
			   	   <ul class="blog-list">
			   	   	  <li><span class="mike"> </span><a href="myself.html">zzzzzyx</a></li>
			   	   	  <li><span class="box"> </span><a href="#">评论 2</a></li>
			   	   	   <li><span class="comm"> </span><a href="#">点赞 4</a></li>
                       <li>
                        <div class="btn-group">
  					<button type="button" class="btn btn-danger">删除</button>
  					<button type="button" class="btn btn-info">编辑</button>
				</div></li>
			   	   </ul>
			   	   <p>从琉森坐包含在通票内的游船到Rigi山脚的小镇，然后坐免费的小火车到Rigi山顶。然后观光之后徒步走了下来。空气很清新！</p>
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
			   	   	  <li><span class="mike"> </span><a href="person.html">李洋</a></li>
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
			   	 <a href="single.html"><h3>足协杯软院vs地海</h3></a>
			   	   <ul class="blog-list">
			   	   	  <li><span class="mike"> </span><a href="myself.html">zzzzzyx</a></li>
			   	   	  <li><span class="box"> </span><a href="#">评论 0</a></li>
			   	   	   <li><span class="comm"> </span><a href="#">点赞 24</a></li>
                       <li><div class="btn-group">
  					<button type="button" class="btn btn-danger">删除</button>
  					<button type="button" class="btn btn-info">编辑</button>
				</div></li>
			   	   </ul>
			   	   <p>12:30-14:00的60分钟足球赛，运动量大，今晚就不跑步了！另外2:0赢了，很开心。各位共勉！</p>
			   </div>
			   <div class="clearfix"> </div>
			  </div>
			 </div>
             
			 <div class="pag-nations">
					<ul class="p_n-list">
						<li class="neg">Prev</li>
						<li class="neg">1</li>
						<li><a href="blog2.html">2</a></li>
						<li><a href="blog2.html">Next</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 blog-right"> 
				<div class="sear">
					<input type="text" value="搜索活动，动态，好友" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '搜索活动，动态，好友';}"/>
					<a href="search.html"><input type="submit" value=""></a>
				</div>
               		<div class="col-md-12 btrnnnn"><a href="recordNew.html"><button type="button" class="btn btn-success recordBtn">记录新的健身</button></a></div>
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
</div>
</div>
<!--blog end here-->
@endsection