<?php ob_start() ?>

      <!-- Breadcrumb Area S t a r t -->
      <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="index.php?route=home" class="single"><?php echo __('home'); ?></a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single">Blog </a></li>
              </ul>
            </nav>
            <h1 class="title wow fadeInUp" data-wow-delay="0.1s">Latest blog</h1>
          </div>
        </div>
      </section>
      <!-- End-of Breadcrumb Area -->

       <!-- Our event S t a r t-->
       <section class="our-event bottom-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7">
              <!-- Section Tittle -->
              <div class="section-tittle text-center mb-50">
              </div>
            </div>
          </div>
          <div class="row gy-24">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
              <div class="single-event h-calc wow fadeInUp" data-wow-delay="0.0s">
                <div class="event-img position-relative">
                  <a href="event-details.html"> <img src="./public/assets/images/gallery/event-2.png" class="img-fluid w-100" alt="img"> </a>
                </div>
                <div class="event-info">
                  <div class="d-flex justify-content-between align-items-center gap-6">
                    <div class="event-info-title">
                      <div class="flex gap-15 mb-18 align-items-center flex-wrap">
                        <div class="date flex gap-12 align-items-center">
                          <i class="ri-time-line"></i>
                          <p class="info">30 Jun 2023</p>
                        </div>
                        <div class="map flex gap-12 align-items-center">
                          <i class="ri-map-pin-line"></i>
                          <p class="info">South . Korea</p>
                        </div>
                      </div>
                      <h4><a class="title text-capitalize" href="event-details.html">Free medical camping</a></h4>
                    </div>
                    <a href="event-details.html" class="btn-arrow"><i class="ri-arrow-right-line"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
              <div class="single-event h-calc wow fadeInUp" data-wow-delay="0.1s">
                <div class="event-img position-relative">
                  <a href="event-details.html"> <img src="./public/assets/images/gallery/event-3.png" class="img-fluid w-100" alt="img"> </a>
                </div>
                <div class="event-info">
                  <div class="d-flex justify-content-between align-items-center gap-6">
                    <div class="event-info-title">
                      <div class="flex gap-15 mb-18 align-items-center flex-wrap">
                        <div class="date flex gap-12 align-items-center">
                          <i class="ri-time-line"></i>
                          <p class="info">30 Jun 2023</p>
                        </div>
                        <div class="map flex gap-12 align-items-center">
                          <i class="ri-map-pin-line"></i>
                          <p class="info">South . Korea</p>
                        </div>
                      </div>
                      <h4><a class="title text-capitalize" href="event-details.html">Free medical camping</a></h4>
                    </div>
                    <a href="event-details.html" class="btn-arrow"><i class="ri-arrow-right-line"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
              <div class="single-event h-calc wow fadeInUp" data-wow-delay="0.2s">
                <div class="event-img position-relative">
                  <a href="event-details.html"> <img src="./public/assets/images/gallery/event-2.png" class="img-fluid w-100" alt="img"> </a>
                </div>
                <div class="event-info">
                  <div class="d-flex justify-content-between align-items-center gap-6">
                    <div class="event-info-title">
                      <div class="flex gap-15 mb-18 align-items-center flex-wrap">
                        <div class="date flex gap-12 align-items-center">
                          <i class="ri-time-line"></i>
                          <p class="info">30 Jun 2023</p>
                        </div>
                        <div class="map flex gap-12 align-items-center">
                          <i class="ri-map-pin-line"></i>
                          <p class="info">South . Korea</p>
                        </div>
                      </div>
                      <h4><a class="title text-capitalize" href="event-details.html">Free medical camping</a></h4>
                    </div>
                    <a href="event-details.html" class="btn-arrow"><i class="ri-arrow-right-line"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <!-- pagination -->
            <nav class="pagination-nav">
            <ul class="pagination">
              <li class="page-item" aria-current="page"><span class="page-link active">1</span></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
              <li class="page-item">
                <a class="page-link next" href="javascript:void(0)" rel="next" aria-label="Next »"><i class="ri-arrow-right-line"></i></a>
              </li>
            </ul>
          </nav>
          <!-- End pagination -->

        </div>
      </section>
      <!-- End-of All Product -->     
<?php
$titre = __('evenements');
$content = ob_get_clean();
require_once "./views/client/template.php";
?>
