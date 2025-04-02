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
   @foreach ($blogs as $article)
  <div class="blog-list-item wow fadeInLeft" data-wow-offset="0" data-wow-delay="0">
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

            <!-- Pagination -->
            <div class="pagination-wrap">
              <nav aria-label="Page navigation example">
                <ul class="pagination list-wrap">
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <span class="visually-hidden">Prev</span>
                      <i class="fa fa-angle-left"></i>
                    </a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item next-page">
                    <a class="page-link" href="#">
                      <span class="visually-hidden">Next</span>
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- /Pagination -->

          </div>


        </div>
      </div>
    </section>
    <!-- /Blog Section -->
  </main>


</x-layout>