<section class="page-section" id="contact">
      <div class="bg-blurred-red"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1 position-relative">
            <div class="bg-blurred-purple"></div>
            <!-- Section Title -->
            <h2 class="section-title-s1 text-center wow fade-right" data-splitting="chars">Let's Get In Touch</h2>
            <!-- /Section Title -->

            <!-- Contact Info -->
            <div class="d-flex flex-wrap justify-content-between mt-5 mb-5">
              <!-- Email -->
              <div class="contact-item col-12 col-lg-4 mb-24 mb-lg-0 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="ci-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="512" height="512">
                    <path
                      d="M1.225,8.467C1.331,8.344,8.48,1.449,8.48,1.449a5.026,5.026,0,0,1,7.055.015s7.134,6.88,7.239,7l-8.653,8.654a3.074,3.074,0,0,1-4.242,0Zm14.31,10.069a5.024,5.024,0,0,1-7.07,0L.229,10.3A4.962,4.962,0,0,0,0,11.708V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V11.708a4.962,4.962,0,0,0-.229-1.408Z" />
                  </svg>
                </div>
                <div class="ci-text">
                  <div class="ci-text-title">E-mail</div>
                  <div class="ci-text-detail">eraymutabesha4@gmail.com</div>
                </div>
              </div>
              <!-- /Email -->

              <!-- Phone -->
              <div class="contact-item col-12 col-lg-4 mb-24 mb-lg-0 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="ci-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="512" height="512">
                    <path
                      d="M23,11a1,1,0,0,1-1-1,8.008,8.008,0,0,0-8-8,1,1,0,0,1,0-2A10.011,10.011,0,0,1,24,10,1,1,0,0,1,23,11Zm-3-1a6,6,0,0,0-6-6,1,1,0,1,0,0,2,4,4,0,0,1,4,4,1,1,0,0,0,2,0Zm2.183,12.164.91-1.049a3.1,3.1,0,0,0,0-4.377c-.031-.031-2.437-1.882-2.437-1.882a3.1,3.1,0,0,0-4.281.006l-1.906,1.606A12.784,12.784,0,0,1,7.537,9.524l1.6-1.9a3.1,3.1,0,0,0,.007-4.282S7.291.939,7.26.908A3.082,3.082,0,0,0,2.934.862l-1.15,1C-5.01,9.744,9.62,24.261,17.762,24A6.155,6.155,0,0,0,22.183,22.164Z" />
                  </svg>
                </div>
                <div class="ci-text">
                  <div class="ci-text-title">Phone</div>
                  <div class="ci-text-detail">+250 791434737</div>
                </div>
              </div>
              <!-- /Phone -->

              <!-- Address -->
              <div class="contact-item col-12 col-lg-4 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="ci-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" id="Filled" viewBox="0 0 24 24" width="512" height="512">
                    <path
                      d="M12,.042a9.992,9.992,0,0,0-9.981,9.98c0,2.57,1.99,6.592,5.915,11.954a5.034,5.034,0,0,0,8.132,0c3.925-5.362,5.915-9.384,5.915-11.954A9.992,9.992,0,0,0,12,.042ZM12,14a4,4,0,1,1,4-4A4,4,0,0,1,12,14Z" />
                  </svg>
                </div>
                <div class="ci-text">
                  <div class="ci-text-title">Location</div>
                  <div class="ci-text-detail">
                    Rwanda/Rubavu/Gisenyi
                  </div>
                </div>
              </div>
              <!-- /Address -->
            </div>
            <!-- /Contact Info -->

            <div class="contact-form-s2-container wow fadeInUp">
              <!-- Contact Form -->
              <div class="form-action-message mb-4">
                <div class="success-message d-none">Thank you! Your Message has been sent.</div>
                <div class="error-message d-none">Something went wrong, Please try again!</div>
              </div>
              <form class="form contact-form-s2 wow fadeScaleOutIn" id="contactForm" method="POST"
                action="/">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <!-- Name -->
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" class="input-lg round form-control"
                        placeholder="Enter your name" pattern=".{3,100}" required aria-required="true">
                    </div>
                    <!-- /Name -->
                  </div>

                  <div class="col-md-6">
                    <!-- Email -->
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="input-lg round form-control"
                        placeholder="Enter your email" pattern=".{5,100}" required aria-required="true">
                    </div>
                    <!-- /Email -->
                  </div>
                </div>



                <!-- Message -->
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" id="message" class="input-lg round form-control" style="height: 130px;"
                    placeholder="Enter your message"></textarea>
                </div>


                
                <div class="row">
                  <div class="col-md-6 col-xl-5">
                    <!-- Send Button -->
                    <div class="pt-3">
                      <button class="submit_btn btn btn-md btn-hvr-slide" id="submit_btn" aria-controls="result">
                        <span class="btn-content">Send Message</span>
                      </button>
                    </div>
                    <!-- /Send Button -->
                  </div>
                </div>
                <div id="result" role="region" aria-live="polite" aria-atomic="true"></div>
              </form>
              <!-- /Contact Form -->
            </div>
          </div>

        </div>

      </div>
    </section>