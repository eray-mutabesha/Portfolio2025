<section class="page-section" id="blog">
      <div class="container position-relative">
        <div class="bg-blurred-red"></div>
        <!-- Section Title -->
        <div class="page-section-title row">
          <div class="col-lg-8 mb-16 mb-lg-0">
            <h3 class="section-title-s8 stroke-text-bolder wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
              My Blog</h3>
          </div>
          <div class="col-lg-8 offset-lg-2">
            <p class="section-title-s4 wow fade-right" data-splitting="chars" data-splitting-delay="1s">Latest News and
              Insight</p>
          </div>
        </div>
        <!-- /Section Title -->

        <!-- Blog Cards -->
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <!-- Blog Card Item -->
            <div class="blog-card wow fadeInLeft" data-wow-offset="0" data-wow-delay="0">
              <div class="blog-card__img">
                <a href="blog-single.html">
                  <span class="visually-hidden">Add link description</span>
                  <img src="assets/images/blog/blog-1.jpg" alt="Add Image Description"></a>
              </div>
              <div class="blog-card__container">

                <h4 class="blog-card__title"><a href="blog-single.html">Web Design is Akin to Painting on a Digital
                    Canvas</a></h4>

                <div class="blog-card__text">
                  In the digital landscape of today, where attention spans are fleeting and first impressions are
                  crucial...
                </div>

                <div class="blog-card__info d-flex justify-content-between align-items-center">
                  <div class="d-flex gap-2 align-items-center">
                    <a href="#">
                      <span class="visually-hidden">Author name</span>
                      <img class="blog-card__author-img" width="30" height="30" src="assets/images/profile-6.jpg"
                        alt="Image Description">
                    </a>
                    <a href="#">Author</a>
                  </div>
                  <div class="float-end">
                    <a href="#">August 3</a>
                  </div>
                </div>

              </div>
            </div>
            <!-- /Blog Card Item -->
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <!-- Blog Card Item -->
            <div class="blog-card wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.2s">
              <div class="blog-card__img">
                <a href="blog-single.html">
                  <span class="visually-hidden">Add link description</span>
                  <img src="assets/images/blog/blog-2.jpg" alt="Add Image Description"></a>
              </div>
              <div class="blog-card__container">
                <h4 class="blog-card__title"><a href="blog-single.html">Web Design is Akin to Painting on a Digital
                    Canvas</a></h4>

                <div class="blog-card__text">
                  In the digital landscape of today, where attention spans are fleeting and first impressions are
                  crucial...
                </div>

                <div class="blog-card__info d-flex justify-content-between align-items-center">
                  <div class="d-flex gap-2 align-items-center">
                    <a href="#">
                      <span class="visually-hidden">Author name</span>
                      <img class="blog-card__author-img" width="30" height="30" src="assets/images/profile-6.jpg"
                        alt="Image Description">
                    </a>
                    <a href="#">Author</a>
                  </div>
                  <div class="float-end">
                    <a href="#">August 3</a>
                  </div>
                </div>

              </div>
            </div>
            <!-- /Blog Card Item -->
          </div>
          <div class="col-lg-4">


          @foreach ($articlesHome as $article)

            <!-- Blog Card Item -->
            <div class="blog-card wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.4s">
              <div class="blog-card__img">
                <a href="blog-single.html">
                  <span class="visually-hidden">Add link description</span>
                  <img src="assets/images/blog/blog-3.jpg" alt="Add Image Description"></a>
              </div>
              <div class="blog-card__container">


                <h4 class="blog-card__title"><a href="blog-single.html">Web Design is Akin to Painting on a Digital
                    Canvas</a></h4>

                <div class="blog-card__text">
                  In the digital landscape of today, where attention spans are fleeting and first impressions are
                  crucial...
                </div>

                <div class="blog-card__info d-flex justify-content-between align-items-center">
                  <div class="d-flex gap-2 align-items-center">
                    <a href="#">
                      <span class="visually-hidden">Author name</span>
                      <img src="{{ asset('storage/' . $article->image_path) }}" alt="Image Description">
                    </a>
                    <a href="#">Author</a>
                  </div>
                  <div class="float-end">
                    <a href="#">August 3</a>
                  </div>
                </div>

              </div>
            </div>
            <!-- /Blog Card Item -->
            @endforeach
          </div>
        </div>
      </div>
    </section>