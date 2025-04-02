<x-layout>

  <!-- all website content -->

<main>
   <section class="page-section" id="postblog">
      <div class="container">

            <!-- Add Comment -->
            <div class="blog-comment-form" >
              <h4 class="blog-comments-title">New article</h4>
              <!-- Form -->
              <form method="POST" action="/postblog" id="form" class="form" enctype="multipart/form-data">
              @csrf
                <div class="row mb-5">
                  <div class="col-md-6 mb-5 mb-md-0">
                    <!-- title -->
                    <label for="name">Title *</label>
                    <input type="text" name="title" id="title" class="input-lg round form-control"
                      placeholder="Make a title" maxlength="100" required aria-required="true">
                  </div>


                </div>



                <!-- Content -->
                <div class="mb-5">
                  <label for="comment">Content of the article</label>
                  <textarea name="content" id="content" class="input-lg round form-control" rows="6"
                    placeholder="Enter the Content of the articlet" maxlength="400"></textarea>
                </div>
            <div class="col-md-6 mb-5 mb-md-0">
                <!-- Image Upload -->
                <label for="image">Upload Image *</label>
                <input type="file" name="image" id="image" class="input-lg round form-control"
                accept="image/*" required aria-required="true">
             </div>

                
             <div class="col-md-6 mb-5 "></div>
                <!-- Send Button -->
                <button type="submit" class="btn btn-md btn-hvr-slide">
                  <span class="btn-content">Post</span>
                </button>

              </form>
              <!-- /Form -->

            </div>
            <!-- /Add Comment -->
        </div>
   </section>
</man>
  <!-- all website content -->

</x-layout>