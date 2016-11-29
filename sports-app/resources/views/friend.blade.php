@extends('layouts.header')
@section('friendActive')
    class="active"
@endsection
@section('content')

<div class="chat">
      <div class="container">
    <div class="chat-main">
          <div class="col-md-3 list-top">
        <h3 align="center">好友列表</h3>
      </div>
          <dlv class="col-md-9 chat-top">
          <p>正在与 <b>李洋</b> 对话中</p>
        </div>
    <div class="col-md-3 list">
          <a href="person.html"><div class= "user"> <img src="images/liyang.jpg"> <span>李洋</span> </div></a>
        </div>
    <div class="col-md-9 chatbar">
          <div class="mod-chatpanel-item mod-chatpanel-customer ">
        <div class="chat clearfix">
              <div class="body  text-body"> <s class="arrow"></s>
            <div class="J_Content content">你今天跑步了吗？</div>
          </div>
              <div class="clearer"></div>
            </div>
      </div>
          <div class="mod-chatpanel-item mod-chatpanel-robot ">
        <div class="chat clearfix">
              <div class="body  "> <s class="arrow"></s>
            <div class="J_Content content">还没跑，你呢？</div>
          </div>
              <div class="clearer"></div>
           		 </div>
      		</div>
           
          <div class="mod-chatpanel-item mod-chatpanel-robot ">
        <div class="chat clearfix">
              <div class="body  "> <s class="arrow"></s>
            <div class="J_Content content">没跑的话，今晚一起去吧？</div>
          </div>
              <div class="clearer"></div>
           		 </div>
      		</div>
             <div class="mod-chatpanel-item mod-chatpanel-customer ">
        <div class="chat clearfix">
              <div class="body  text-body"> <s class="arrow"></s>
            <div class="J_Content content">好！那晚上八点不见不散！</div>
              <div class="clearer"></div>
          </div>
            </div>
      </div>
      	</div>
        <div class="form-group">
       		 <textarea class="col-md-8 inputArea" rows="6" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/> </textarea>

            <button type="button" class="submitBtn btn btn-default">发送</button>
		</div>      
  	</div>
</div>
<!--blog end here-->
@endsection