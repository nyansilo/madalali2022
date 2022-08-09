
@if ($paginator->hasPages())
<div class="mbp_pagination">
    <ul class="page_navigation justify-content-center">

        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> 
                    <span class="flaticon-left-arrow"></span> Prev</a>
            </li>

        @else
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><span class="flaticon-left-arrow"></span> Prev</a>
            </li>
        @endif
      

        {{-- Pagination Elements --}}
    

        @if($paginator->currentPage() > 3)
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url(1) }}">1</a>
            </li>
        @endif
        @if($paginator->currentPage() > 4)
             <li class="page-item disabled">
                <a class="page-link" href="#">...</a>
            </li>
        @endif
        @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                @if ($i == $paginator->currentPage())
                    <li class="page-item active">
                        <a class="page-link">
                            <span class="sr-only">(current)</span>{{ $i }}
                        </a>
                    </li>
                    
                @else
                    <li class="page-item">
               
                        <a class="page-link"><a href="{{ $paginator->url($i) }}">{{ $i }}
                        </a>
                    </li>
                @endif
            @endif
        @endforeach

        @if($paginator->currentPage() < $paginator->lastPage() - 3)
            <li class="page-item disabled">
                <a class="page-link" href="#">...</a>
            </li>
        @endif




        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
                    <span class="flaticon-right-arrow"></span>
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link" href="#">
                    <span class="flaticon-right-arrow"></span>
                </a>
            </li>
        @endif
    </ul>
 </div>   

@endif
