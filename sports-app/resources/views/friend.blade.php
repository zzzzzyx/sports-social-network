@extends('layouts.header')
@section('friendActive')
    class="active"
@endsection
@section('content')

    <div class="chat">
        <form method="POST" action="{{$id}}">
        <div class="container">
            <div class="chat-main">
                <div class="col-md-3 list-top">
                    <h3 align="center">好友列表</h3>
                </div>
                <dlv class="col-md-9 chat-top">
                    <p>正在与 <a href="{{url('/person/'.$id.'/0')}}"><b>{{$chatFriendName}}</b></a> 对话中</p>
            </div>
            <div class="col-md-3 list">
                @for ($i = 0; $i < $pCount; $i++)
                    <a href="{{ url('/friend/chatwith/'.$friendIdList[$i]) }}"><div class= "user"> <img src="/images/liyang.jpg"> <span>{{$pName[$i]}}</span> </div></a>
                @endfor
            </div>

            <div class="col-md-9 chatbar">
                @foreach($dialogList as $dialog)
                    @if($id == $dialog->sender_id)
                        <div class="mod-chatpanel-item mod-chatpanel-robot ">
                            <div class="chat clearfix">
                                <div class="body  "> <s class="arrow"></s>
                                    <div class="J_Content content">{{$dialog->content}}</div>
                                </div>
                                <div class="clearer"></div>
                            </div>
                        </div>
                        @else
                        <div class="mod-chatpanel-item mod-chatpanel-customer ">
                            <div class="chat clearfix">
                                <div class="body  text-body"> <s class="arrow"></s>
                                    <div class="J_Content content">{{$dialog->content}}</div>
                                    <div class="clearer"></div>
                                </div>
                            </div>
                        </div>
                        @endif
                @endforeach
            </div>
            <div class="form-group">

                    <textarea class="col-md-8 inputArea" rows="6" name="context"/> </textarea>

                    <button type="submit" class="submitBtn btn btn-default">发送</button>

            </div>
        </div></form>
    </div>
    <!--blog end here-->
@endsection