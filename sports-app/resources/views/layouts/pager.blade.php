
<div class="eventpn pag-nations">
    <ul class="p_n-list">
        @if($pos == 0)
            <li class="neg">Prev</li>
        @else
            <li><a href="{{ url($urlPrefix.ceil($pos/$numPerPage - 1)) }}">Prev</a></li>
        @endif

        <li class="neg">{{$pos/$numPerPage+1}}</li>

        @if($pos/$numPerPage == $listNum-1)
            <li class="neg">Next</li>
        @else
            <li><a href="{{ url($urlPrefix.(ceil($pos/$numPerPage+1))) }}">Next</a></li>
        @endif
    </ul>
</div>