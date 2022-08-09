
@if ($paginator->hasPages())

    <ul class="pagination m-0 ms-auto">

        @if ($paginator->onFirstPage())
           <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> 
                     <i class="ti ti-chevron-left"></i> Prev
                  </a>
            </li>

        @else
            <li class="page-item">
              <a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                  Prev
                  <i class="ti ti-chevron-left"></i>
              </a>
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
                               {{ $page }}
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
                    next 
                    <i class="ti ti-chevron-right"></i>
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link" href="#">
                    next 
                    <i class="ti ti-chevron-right"></i>
                </a>
            </li>
        @endif
    </ul>
 

@endif

