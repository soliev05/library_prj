<style>

.flexUl{
    display:flex;
    color: #e2e2e2;
    
}
#backgroundli{
    margin-top:20px;
    font-size:22px;
    backgrount:none;
    /* color:#454545 ; */
    /* background-color:#b46c6c; */
    /* box-shadow: 0px 0px 9px 5px; */
}

#nextMbTop, #tochka {
    margin-top:18px;
    font-size:30px;
    color: #e2e2e2;
}
/* #nextMbTop:hover{
    font-size:45px;
} */

.flexCenter{
    display:flex;
    justify-content: center;
    margin-top:20px;
    margin-bottom:20px;
}



</style>



@if ($paginator->hasPages())
    <div class="flexCenter">
        <nav>
            <ul class="pagination flexUl">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" id='nextMbTop' aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                    </li>
                @else
                    <li class="page-item" id='nextMbTop'>
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" id='tochka' aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active " id='backgroundli'  aria-current="page"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item " id='backgroundli'  ><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item" id='nextMbTop'>
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                    </li>
                @else
                    <li class="page-item disabled" id='nextMbTop' aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span class="page-link" aria-hidden="true">&rsaquo;</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endif
