<?php ob_start() ?>

    <!-- 404 area start -->
    <section class="not-found pt-100 pb-100" style="background-image: url('./public/assets_client/img/bg/bg-abt.jpg');" data-overlay="9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="area-not-found z-5">
                        <h1 class="head-404 mb-35 mt-40">
            4<span class="green">0</span>4
          </h1>
                        <h5 class="fs-19 mb-25"><?php echo __('er1'); ?></h5>
                        <form action="#" class="search-not-found">
                            <div class="form-group relative mb-25 ">
                                <input type="text" class="form-control input-lg input-white shadow-5" id="phone" placeholder="<?php echo __('er3'); ?>">
                                <i class="fas fa-search transform-v-center"></i>
                            </div>
                        </form>
                        <p class="mb-35"><?php echo __('er2'); ?> <a href="index.php?route=home" class="underline"><?php echo __('home'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 area end -->

    <?php
    // <!-- cta area start -->
    // <section class="cta pt-50 pb-50" style="background-image: url('./public/assets_client/img/bg/bg_cta.jpg');" data-overlay="9">
    //     <div class="container">
    //         <div class="row align-items-center">
    //             <div class="col-xl-4 col-lg-5 mb-md-20 text-center text-lg-left">
    //                 <h3 class="z-5 white f-700 lh-18 wow fadeInLeft">What type of challenge are you facing? 
    //                   <span class="green italic">Let’s talk</span>
    //                 </h3>
    //             </div>
    //             <div class="col-xl-8 col-lg-7 text-center text-lg-right z-5">
    //                 <a href="#" class="btn btn-square-white mr-20 mr-xs-00 d-block d-sm-inline-block mb-xs-15 wow fadeInUp">
    //                     <i class="fas fa-envelope mr-15"></i>info@example.com
    //                 </a>
    //                 <a href="tel:1234567890" class="btn btn-square-green d-block d-sm-inline-block blob-small wow fadeInUp">
    //                     <i class="fas fa-phone mr-15"></i>+1 234 567 890
    //                 </a>
    //             </div>
    //         </div>
    //     </div>
    // </section>
    // <!-- cta area end -->
    ?>
<?php
$titre = __('er');
$content = ob_get_clean();
require_once "./views/client/template.php";
?>
