<x-layout>

  <!-- all website content -->

<main>
   <section class="page-section" id="postblog" >
      <div class="container"  >



            @if (session('success'))
               <div style="color: green; padding: 10px; border: 1px solid green">
                  {{ session('success') }}
                 </div>
             @endif

             
            <!-- Add Comment -->
            <div class="blog-comment-form" style=" positon:relative ; left: auto ; right:auto ">
              <h4 class="blog-comments-title">Create an administrator acount</h4>
              <!-- Form -->
              


              <form method="POST"  action="{{route('register.post')}}"  id="form" class="form" enctype="multipart/form-data"  >
              @csrf



                <div class="row mb-5" >
                  <div class="col-md-6 mb-5 mb-md-0">
                    <!-- title -->
                    <label for="name">UserName *</label>
                    <input type="text" name="name" id="name" class="input-lg round form-control"
                      placeholder="UserName" maxlength="100" >
                      @if($errors->has('email'))
                      <span style="color:red">{{$errors->first('name')}}</span>
                      @endif
                  </div>

                <div class="row mb-5">
                  <div class="col-md-6 mb-5 mb-md-0">
                    <!-- title -->
                    <label for="email">Email *</label>
                    <input type="email" name="email" id="email" class="input-lg round form-control"
                      placeholder="Email" maxlength="100" >

                      @if($errors->has('text'))
                      <span style="color:red">{{$errors->first('text')}}</span>
                      @endif
                  </div>


                  <div class="row mb-5" >
                  <div class="col-md-6 mb-5 mb-md-0">
                    <!-- title -->
                    <label for="password">Password *</label>
                    <input type="password" name="password" id="password" class="input-lg round form-control"
                      placeholder="password" maxlength="100" >
                      @if($errors->has('password'))
                      <span style="color:red">{{$errors->first('password')}}</span>
                      @endif
                  </div>
                </div>



    
             <div class="col-md-6 mb-5 ">
                <!-- Send Button -->
                <button type="submit" class="btn btn-md btn-hvr-slide">
                  <span class="btn-content">validate</span>
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