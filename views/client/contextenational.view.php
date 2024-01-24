<?php ob_start() ?>

      <!-- Breadcrumb Area S t a r t -->
      <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="index.php?route=home" class="single"><?php echo __('home'); ?></a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single"><?php echo __('contextenational'); ?></a></li>
              </ul>
            </nav>
            <h1 class="title wow fadeInUp" data-wow-delay="0.1s"><?php echo __('contextenational'); ?></h1>
          </div>
        </div>
      </section>
      <!-- End-of Breadcrumb Area -->

      <!-- Any Question Area S t a r t -->
      <section class="question-area section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 my-auto">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php echo __('cng'); ?></button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body"><?php echo __('cngc'); ?></div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed additional-styles" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><?php echo __('cnd'); ?></button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body"><?php echo __('cndc'); ?></div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed additional-styles" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><?php echo __('cnp'); ?></button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body"><?php echo __('cnpc1'); ?>
                    <br><br>
                          <?php echo __('cnpc2'); ?>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed additional-styles" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><?php echo __('cns'); ?></button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">                                    
                      <?php echo __('cnsc1'); ?>
                                    
                      <br><br>
                      <?php echo __('cnsc2'); ?>

                      <br><br>
                      <?php echo __('cnsc3'); ?></div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed additional-styles" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><?php echo __('cnss'); ?></button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <?php echo __('cnssc1'); ?>

                    <br><br>
                    <?php echo __('cnssc2'); ?>

                    <br><br>
                    <?php echo __('cnssc3'); ?>

                    <br><br>
                    <?php echo __('cnssc4'); ?>

                    <br><br>
                    <?php echo __('cnssc5'); ?>

                    <br><br>
                    <?php echo __('cnssc6'); ?>

                    <br><br>
                    <?php echo __('cnssc7'); ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="volunteer-info-card">
                <h4 class="title"><?php echo __('help'); ?></h4>
                <div class="contact-list">
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-phone-fill"></i>
                    </div>
                    <a class="title" href="javascript:void(0)"><?php echo $tel; ?></a>
                  </div>
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-mail-line"></i>
                    </div>
                    <a class="title" href="javascript:void(0)"><?php echo $email1; ?></a>
                  </div>
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-map-pin-line"></i>
                    </div>
                    <a class="title" href="javascript:void(0)"><?php echo $addresse; ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End-of Question Area -->

<?php
$titre = __('contextenational');
$content = ob_get_clean();
require_once "./views/client/template.php";
?>