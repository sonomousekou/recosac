<?php ob_start() ?>

      <!-- Breadcrumb Area S t a r t -->
      <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="index.php?route=home" class="single"><?php echo __('home'); ?></a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single"><?php echo __('notrehistoire'); ?></a></li>
              </ul>
            </nav>
            <h1 class="title wow fadeInUp" data-wow-delay="0.1s"><?php echo __('notrehistoire'); ?></h1>
          </div>
        </div>
      </section>
      <!-- End-of Breadcrumb Area -->

    <!-- Notre histoire-->
    <div class="terms-condition area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-terms mb-30">
                        <h5 class="title font-600"><?php echo __('ht1'); ?></h5>

                        <p class="pera mb-20"><?php echo __('hp1'); ?>.</p>
                        <p class="pera mb-20"><?php echo __('hp2'); ?>.</p>
                        <p class="pera mb-20"><?php echo __('hp3'); ?>.</p>
                        <p class="pera mb-20"><?php echo __('hp4'); ?>.</p>
                        <p class="pera mb-20"><?php echo __('hp6'); ?>.</p>
                        <p class="pera mb-20"><?php echo __('hp5'); ?>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$titre = __('notrehistoire');
$content = ob_get_clean();
require_once "./views/client/template.php";
?>
