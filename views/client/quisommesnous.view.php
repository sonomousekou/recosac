<?php ob_start() ?>
     <!-- Breadcrumb Area S t a r t -->
      <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="index.php?route=home" class="single"><?php echo __('home'); ?></a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single">RECOSAC-G</a></li>
              </ul>
            </nav>
            <h1 class="title wow fadeInUp" data-wow-delay="0.1s"><?php echo __('quisommesnous'); ?></h1>
          </div>
        </div>
      </section>
      <!-- End-of Breadcrumb Area -->

      <div class="faqs-area section-padding">
        <div class="container">
            <div class="row">
            <div class="col-xl-12 my-auto">
              <!-- Section Tittle -->
              <div class="section-tittle mb-30">
                <span class="sub-tittle text-capitalize font-600">RECOSAC-G</span>
                <h2 class="title font-700 pb-15"><?php echo __('rdf'); ?></h2>
                <p class="pera-subtitle"><?php echo __('rco'); ?></p>
                <p class="pera-subtitle"><?php echo __('rco2'); ?></p>
              </div>
            </div>

                <div class="col-xl-12">
                    <!-- Single -->
                    <div class="single-terms mb-30">
                        <h5 class="title font-600"><?php echo __('rmi'); ?></h5>
                        <p class="pera mb-20"><?php echo __('rmc'); ?></p>
                        <!-- Single Listing -->
                        <ul class="experience listing listing2">
                            <li class="single-list">
                              <i class="ri-shield-check-line"></i>
                                <p class="pera"><?php echo __('rm1'); ?></p>
                            </li>
                            <li class="single-list">
                              <i class="ri-shield-check-line"></i>
                                <p class="pera"><?php echo __('rm2'); ?></p>
                            </li>
                        </ul>
                    </div>
                    <!-- Single -->
                    <div class="single-terms mb-30">
                        <h5 class="title font-600"><?php echo __('rvi'); ?> </h5>
                        <p class="pera mb-20"><?php echo __('rvc'); ?></p>
                    </div>
                </div>
            </div>
        </div>
      </div>

<?php
$titre = __('quisommesnous');
$content = ob_get_clean();
require_once "./views/client/template.php";
?>
