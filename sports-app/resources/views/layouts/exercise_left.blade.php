@for($i = 0 ; $i < count($blurQuartetList); $i ++)
    <?php $blur = $blurQuartetList[$i]?>
    <div class="blog-section">
        <div class="grid">
            <div class="grid-left">
                <h3>{{$blur->day}}</h3>
                <p>{{$blur->month}}</p>
            </div>
            <div class="grid-right">
                <a href="{{ url('/exercise/single/'.$blur->id) }}"><h3>{{$blur->title}}</h3></a>
                <ul class="blog-list">
                    <li><span class="mike"> </span><a href="{{url('/person/'.$blur->user_id.'/0')}}">{{$blur->author}}</a></li>
                    @if(!$blur->thisUserLikeOrNot)
                        <li><span class="comm"> </span><a href="/exercise/single/{{$blur->id}}/like?returnUrl={{$_SERVER['REQUEST_URI']}}">点赞 {{$blur->likerNum}}</a></li>
                    @else
                        <li><span class="comm"> </span><a href="/exercise/single/{{$blur->id}}/like?returnUrl={{$_SERVER['REQUEST_URI']}}">取消点赞 {{$blur->likerNum}}</a></li>
                    @endif
                    @if($blur->editable || $userGrade == 0)
                        <li>
                            <span class="delete"></span><a onclick="window.location.href=('/exercise/single/'+{{$blur->id}}+'/delete?returnUrl={{$_SERVER['REQUEST_URI']}}')">删除</a>
                        </li>
                    @endif
                </ul>
                <p>{{$blur->description}}</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@endfor