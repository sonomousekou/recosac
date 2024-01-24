<?php ob_start() ?>

      <!-- Hero area S t a r t-->
      <section class="hero-area">
        <div class="single-slider hero-padding">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-xxl-6 col-xl-6 col-lg-7 my-auto">
                <div class="hero-caption-one mb-20">
                  <!-- <h4 class="key-title font-700 mb-20 wow fadeInUp" data-wow-delay="0.0s">RECOSAC-G</h4> -->
                  <h2 class="title font-700 wow fadeInUp" data-wow-delay="0.1s"><?php echo __('rdf'); ?></h2>
                  <p class="pera wow fadeInUp" data-wow-delay="0.3s"><?php echo __('rco'); ?></p>
                  <p class="pera wow fadeInUp" data-wow-delay="0.3s"><?php echo __('rco2'); ?></p>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="d-flex gap-44">
                  <div class="hero-image position-relative d-none d-lg-block rounded border border-dark p-2 m-2">
                    <img src="./public/assets/images/about/about_video.jpg" alt="img" class="w-100 tilt-effect wow fadeInUp" data-wow-delay="0.1s" >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End-of Hero-->

<?php
$titre = __('home');
$content = ob_get_clean();
require_once "./views/client/template.php";
?>
