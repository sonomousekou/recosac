<?php ob_start() ?>

      <!-- Breadcrumb Area S t a r t -->
      <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="index.php?route=home" class="single"><?php echo __('home'); ?></a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single"><?php echo __('partenaires'); ?></a></li>
              </ul>
            </nav>
            <h1 class="title wow fadeInUp" data-wow-delay="0.1s"><?php echo __('partenaires'); ?></h1>
          </div>
        </div>
      </section>
      <!-- End-of Breadcrumb Area -->

  <!-- Privacy policy S t r t -->
  <div class="privacy-policy-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <!-- Single -->
                <div class="single-terms mb-30">
                    <h5 class="title font-600">Partenaires techniques et financier du RECOSAC-G</h5>
                    <!-- Single Listing -->
                    <ul class="experience listing listing2">
                        <li class="single-list">
                           <i class="ri-shield-check-line"></i>
                            <p class="pera">Pain pour le Monde </p>
                        </li>
                        <li class="single-list">
                           <i class="ri-shield-check-line"></i>
                            <p class="pera">Ministère de la santé et de l’hygiène  publique </p>
                        </li>
                        <li class="single-list">
                           <i class="ri-shield-check-line"></i>
                            <p class="pera">Miraclefeet</p>
                        </li>
                        <li class="single-list">
                           <i class="ri-shield-check-line"></i>
                            <p class="pera">DIFAEM</p>
                        </li>
                        <li class="single-list">
                           <i class="ri-shield-check-line"></i>
                            <p class="pera">CRS-Guinée</p>
                        </li>
                    </ul>
                </div>
              
            </div>
        </div>
    </div>
</div>


<?php
$titre = __('partenaires');
$content = ob_get_clean();
require_once "./views/client/template.php";
?>
