
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

            {{-- Array Of Links --}}
            @if (is_array($element))
                <?php $index = 0; ?>
                @foreach ($element as $page => $url)
                    @if($index<4)
                        @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link">
                                <span class="sr-only">(current)</span>{{ $page }}
                            </a>
                        </li>
                        @else
                             
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}
                            </a>
                            </li>
                        @endif
                    @endif
                    <?php $index++ ?>
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
