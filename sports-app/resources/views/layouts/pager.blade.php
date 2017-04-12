<script>

</script>
<nav aria-label="Page navigation">
    <ul class="pagination pagination-lg">
        <li>
            @if($pos/$numPerPage==0)
                <a href="{{ url($urlPrefix.ceil($pos/$numPerPage)) }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            @else
                <a href="{{ url($urlPrefix.ceil($pos/$numPerPage-1)) }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            @endif
        </li>
        @if($pos/$numPerPage<2)
            @if($pos/$numPerPage==0)
                <li class="active"><a href="{{ url($urlPrefix.ceil(0)) }}">1</a></li>
            @else
                <li><a href="{{ url($urlPrefix.ceil(0)) }}">1</a></li>
            @endif
            @if($pos/$numPerPage==1)
                <li class="active"><a href="{{ url($urlPrefix.ceil(1)) }}">2</a></li>
            @else
                <li><a href="{{ url($urlPrefix.ceil(1)) }}">2</a></li>
            @endif
            @if($pos/$numPerPage==2)
                <li class="active"><a href="{{ url($urlPrefix.ceil(2)) }}">3</a></li>
            @else
                <li><a href="{{ url($urlPrefix.ceil(2)) }}">3</a></li>
            @endif
            <li><a href="{{ url($urlPrefix.ceil(3)) }}">4</a></li>
            <li><a href="{{ url($urlPrefix.ceil(4)) }}">5</a></li>
        @elseif($pos/$numPerPage < $listNum-3)
            <li><a href="{{ url($urlPrefix.ceil($pos/$numPerPage - 2)) }}">{{$pos/$numPerPage-1}}</a></li>
            <li><a href="{{ url($urlPrefix.ceil($pos/$numPerPage - 1)) }}">{{$pos/$numPerPage}}</a></li>
            <li class="active"><a href="{{ url($urlPrefix.ceil($pos/$numPerPage)) }}">{{$pos/$numPerPage+1}}</a></li>
            <li><a href="{{ url($urlPrefix.ceil($pos/$numPerPage + 1)) }}">{{$pos/$numPerPage+2}}</a></li>
            <li><a href="{{ url($urlPrefix.ceil($pos/$numPerPage +2)) }}">{{$pos/$numPerPage+3}}</a></li>
        @else
            <li><a href="{{ url($urlPrefix.ceil($listNum-5)) }}">{{$listNum-4}}</a></li>
            <li><a href="{{ url($urlPrefix.ceil($listNum-4)) }}">{{$listNum-3}}</a></li>
            @if($pos/$numPerPage==$listNum-3)
                <li class="active"><a href="{{ url($urlPrefix.ceil($listNum-3)) }}">{{$listNum-2}}</a></li>
            @else
                <li><a href="{{ url($urlPrefix.ceil($listNum-3)) }}">{{$listNum-2}}</a></li>
            @endif
            @if($pos/$numPerPage==$listNum-2)
                <li class="active"><a href="{{ url($urlPrefix.ceil($listNum-2)) }}">{{$listNum-1}}</a></li>
            @else
                <li><a href="{{ url($urlPrefix.ceil($listNum-2)) }}">{{$listNum-1}}</a></li>
            @endif
            @if($pos/$numPerPage==$listNum-1)
                <li class="active"><a href="{{ url($urlPrefix.ceil($listNum-1))}}">{{$listNum}}</a></li>
            @else
                <li><a href="{{ url($urlPrefix.ceil($listNum-1))}}">{{$listNum}}</a></li>
            @endif


        @endif


        <li>
        @if($pos/$numPerPage==$listNum-1)
            <a href="{{ url($urlPrefix.ceil($pos/$numPerPage)) }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        @else
            <a href="{{ url($urlPrefix.ceil($pos/$numPerPage+1)) }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        @endif
        </li>
    </ul>
</nav>