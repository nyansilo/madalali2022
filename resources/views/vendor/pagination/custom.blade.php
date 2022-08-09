
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
        @foreach ($elements as $element)

        
            @if (is_string($element))
                <li class="page-item disabled">{{ $element }}</li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)

                    {{-- This logic without Three dots --}}
                    {{--@if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link">
                                <span class="sr-only">(current)</span>{{ $page }}
                            </a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                    --}}

                    {{-- This logic with Three dots --}}
                    @if ($page === $paginator->currentPage())

                         <li class="page-item active">
                            <a class="page-link">
                                <span class="sr-only">(current)</span>{{ $page }}
                            </a>
                        </li>

                    @elseif (($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2)
                     || $page === $paginator->lastPage())
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @elseif ($page === $paginator->lastPage()-1)

                        <li class="page-item disabled">
                            <a class="page-link" href="#">...</a>
                        </li>
                
                    @endif
                    





                @endforeach
            @endif
          
        @endforeach 

      

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
