<?php
// config
$link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>

@if ($paginator->hasPages())
<div class="mbp_pagination">
    <ul class="page_navigation justify-content-center">

       


        @if ($paginator->lastPage() > 1)

                    {{-- Prev Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> 
                                <span class="flaticon-left-arrow"></span> Prev</a>
                        </li>

                    @else
                            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><span class="flaticon-left-arrow"></span> Prev</a>
                            </li>
                    @endif
               
                    <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                        <a class="page-link" href="{{ $paginator->url(1) }}">First</a>
                     </li>

                    



                    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                        <?php
                        $half_total_links = floor($link_limit / 2);
                        $from = $paginator->currentPage() - $half_total_links;
                        $to = $paginator->currentPage() + $half_total_links;
                        if ($paginator->currentPage() < $half_total_links) {
                           $to += $half_total_links - $paginator->currentPage();
                        }
                        if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                            $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
                        }
                        ?>

                        @if ($from < $i && $i < $to)
                            <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                                <a class="page-link" href="{{ $paginator->url($i) }}">
                                    <span class="sr-only">(current)</span>
                                    {{ $i }}
                                </a>
                            </li>
                        
                        @endif
                    @endfor


                    

                    <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                        <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">Last</a>
                    </li>

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
                
            @endif




      

      

        
    </ul>
 </div>   

@endif
