<x-layout>

  <!-- all website content -->

<main>
   <section class="page-section" id="postblog" >
      <div class="container"  >

            <!-- Add Comment -->
            <div class="blog-comment-form" style=" positon:relative ; left: auto ; right:auto ">
              <h4 class="blog-comments-title">Login as administrator</h4>
              <!-- Form -->

              <form method="POST"  action="/loginpost"  id="form" class="form" enctype="multipart/form-data"  >
              @csrf



                <div class="row mb-5" >
                  <div class="col-md-6 mb-5 mb-md-0">
                    <!-- title -->
                    <label for="name">Email *</label>
                    <input type="text" name="email" id="name" class="input-lg round form-control"
                      placeholder="UserName" maxlength="100" required aria-required="true">
                      @if($errors->has('email'))
                      <span style="color:red">{{$errors->first('email')}}</span>
                      @endif
                  </div>

                <div class="row mb-5">
                  <div class="col-md-6 mb-5 mb-md-0">
                    <!-- title -->
                    <label for="name">Password *</label>
                    <input type="password" name="password" id="password" class="input-lg round form-control"
                      placeholder="Password" maxlength="100" required aria-required="true">

                      @if($errors->has('password'))
                      <span style="color:red">{{$errors->first('password')}}</span>
                      @endif
                  </div>

                </div>
    
             <div class="col-md-6 mb-5 ">
                <!-- Send Button -->
                <button type="submit" class="btn btn-md btn-hvr-slide">
                  <span class="btn-content">connexion</span>
                </button>
                </div>
              </form>
              <!-- /Form -->

            </div>
            <!-- /Add Comment -->
        </div>
   </section>
</man>
  <!-- all website content -->

</x-layout>