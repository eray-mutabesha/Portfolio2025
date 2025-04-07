<x-layout>

  <main>
    <!-- Blog Section -->
    <section class="page-section">
      <div class="container">
        <div class="row">
          <div style="width: 70%; margin:auto;">

            <!-- Blog List -->
            <div class="blog-list">
              <!-- Blog List Item -->
   @foreach ($articles as $article)
  <div class="blog-list-item wow fadeInLeft" data-wow-offset="0" data-wow-delay="0" style="
   white-space: normal;
  word-wrap: break-word; 
  overflow-wrap: break-word;">

    <div class="blog-list-item__image">
      <a href="blog-detail.html">
        <span class="visually-hidden">Add link description</span>
        <img src="{{ asset('storage/' . $article->image_path) }}" alt="Image Description">

      </a>

      <span class="blog-list-item__date">{{$article->created_at}}</span>
    </div>

    <h4 class="blog-list-item__title">
      <a href="blog-detail.html">{{$article->title}}</a> <!-- Corrected property access -->
    </h4>

    <div class="blog-list-item__text">
      {{ $article->content }} <!-- Corrected property access -->
    </div>
  </div>
@endforeach


              <!-- /Blog List Item -->


            </div>
            <!-- /Blog List -->
            <div class="pagination-container">
         
            </div>

                        <!-- Pagination -->
<!-- Custom Pagination -->
<div class="pagination-wrap">
    <nav aria-label="Page navigation example">
        <ul class="pagination list-wrap">

            <!-- Previous Page Link -->
            @if ($articles->onFirstPage())
                <li class="page-item disabled"><span class="page-link">Prev</span></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $articles->previousPageUrl() }}">Prev</a></li>
            @endif

            <!-- Pagination Elements -->
            @foreach ($articles->getUrlRange(1, $articles->lastPage()) as $page => $url)
                @if ($page == $articles->currentPage())
                    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach

            <!-- Next Page Link -->
            @if ($articles->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $articles->nextPageUrl() }}">Next</a></li>
            @else
                <li class="page-item disabled"><span class="page-link">Next</span></li>
            @endif

        </ul>
    </nav>
</div>
<!-- /Custom Pagination -->

            <!-- /Pagination -->
          </div>


        </div>
      </div>
    </section>
    <!-- /Blog Section -->
  </main>


</x-layout>