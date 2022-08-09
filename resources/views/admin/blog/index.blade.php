@extends('layouts.back_end.admin_layout')

@section('title', 'Madalali4u | All Blog')

@section('admin_content')

<div class="container-xl"> 
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
              <div class="col">


                <h2 class="page-title">
                  Display All blog posts
                </h2>
                <div class="text-muted mt-1"><a href="{{ url('/admin/dashboard') }}"> Dashboard</a> > Blog
                </div>

               
              </div>
                <!-- Page title actions -->
              <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="btn-list">
                  <a href="{{ route('admin.blog.create')}}" class="btn btn-primary d-none d-sm-inline-block" >
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                   Create Blog
                  </a>
                  <a href="" class="btn btn-primary d-sm-none btn-icon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                  </a>
                </div>
          </div>
        </div>
    </div>

</div>

      
<!-- Page body actions -->

<div class="page-body">
  <div class="container-xl">

     
    <div class="card">

      <div class="card-body">
        <div id="table-default">

          <table class="table">
            <thead>
              <tr>
                <th><button class="table-sort" data-sort="sort-name">Action</button></th>
                <th><button class="table-sort" data-sort="sort-city">Title</button></th>
                <th><button class="table-sort" data-sort="sort-type">Author</button></th>
                <th><button class="table-sort" data-sort="sort-score">Category</button></th>
                <th><button class="table-sort" data-sort="sort-date">Date</button>
              </tr>
            </thead>


            @if(!$blogs->count() > 0)

                <tbody class="table-tbody">  

                   <tr>
                        <td>
                            No data Found
                        </td>
                    </tr>
                </tbody>

            @else
                <tbody class="table-tbody">


                        @foreach($blogs as $blog)
                        <tr>
                            <td class="sort-name"  width="140">
                                <button type="submit"  class="btn btn-outline-info w-30">
                                <a href="{{ route('admin.blog.edit', $blog->id) }}">
                                     <i class="ti ti-pencil"></i>

                                </a>
                                </button> 
                                <button type="submit" class="btn btn-outline-danger w-30">
                                  <a href="{{ route('admin.blog.destroy', $blog->id) }}" >
                                            <i class="ti ti-trash"></i>
                                  </a>
                                </button>


                            </td>
                            <td class="sort-city">{{ $blog->title }}</td>
                            <td class="sort-type">{{ $blog->author->user_name }}</td>
                            <td class="sort-score">{{ $blog->category->title }}</td>
                            <td class="sort-date"  width="190" data-date="1628071164">
                                <abbr title="{{ $blog->dateFormatted(true) }}">{{ $blog->dateFormatted() }}</abbr> |
                                {!! $blog->publicationLabel() !!}
                            </td>
                        </tr>
                        @endforeach
                  
                </tbody>

              @endif

          </table>

        </div>
      </div>

       <div class="card-footer d-flex align-items-center">
              <p class="m-0 text-muted">Showing 
                <span>{{ $blogs->firstItem() }}</span> to <span>{{ $blogs->lastItem() }} </span> of <span> {{$blogs->total()}} entries</span>
              </p>

             

              {{ $blogs->links('vendor.pagination.admin') }}

              {{--<ul class="pagination m-0 ms-auto">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                    
                    prev
                    <i class="ti ti-chevron-left"></i>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    next 
                    <i class="ti ti-chevron-right"></i>
                    
                  </a>


                </li>
             </ul> --}}


         </div>





    </div>
  </div>
</div>



<footer class="footer footer-transparent d-print-none">

      <div class="container-xl">
        <div class="row text-center align-items-center flex-row-reverse">
          <div class="col-lg-auto ms-lg-auto">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item"><a href="./docs/index.html" class="link-secondary">Documentation</a></li>
              <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
              <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
              <li class="list-inline-item">
                <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                  <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                  Sponsor
                </a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-lg-auto mt-3 mt-lg-0">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item">
                Copyright &copy; 2022
                <a href="." class="link-secondary">Tabler</a>.
                All rights reserved.
              </li>
              <li class="list-inline-item">
                <a href="./changelog.html" class="link-secondary" rel="noopener">
                  v1.0.0-beta10
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
</footer>

@endsection