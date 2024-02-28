<?php ob_start() ?>

      <!-- Breadcrumb Area S t a r t -->
      <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="index.php?route=home" class="single"><?php echo __('home'); ?></a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single">contact</a></li>
              </ul>
            </nav>
            <h1 class="title wow fadeInUp" data-wow-delay="0.1s"><?php echo __('cont'); ?></h1>
          </div>
        </div>
      </section>
      <!-- End-of Breadcrumb Area -->

      <!-- Contact area S t a r t-->
      <div class="volunteer-details top-bottom-padding2">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="contact-section">
                <div class="contact-list">
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-phone-fill"></i>
                    </div>
                    <div class="divider-ver"></div>
                    <div class="contact-content">
                      <p class="subtitle"><?php echo __('phone'); ?></p>
                      <a class="title" href="javascript:void(0)"><?php echo $tel; ?></a>
                    </div>
                  </div>
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-mail-fill"></i>
                    </div>
                    <div class="divider-ver"></div>
                    <div class="contact-content">
                      <p class="subtitle">Email</p>
                      <a class="title" href="javascript:void(0)"><?php echo $email1; ?></a>
                    </div>
                  </div>
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-map-pin-line"></i>
                    </div>
                    <div class="divider-ver"></div>
                    <div class="contact-content">
                      <p class="subtitle">Address</p>
                      <a class="title" href="javascript:void(0)"><?php echo $addresse; ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="top-padding4">
            <div class="row gy-24">
              <div class="col-xl-6">
                <div class="send-box">
                  <!-- <form action="" class="custom-form"> -->
                  <form action="mailto:moi@monsite.com" method="post" class="custom-form"> 
                    <div class="row">
                      <div class="col-xl-12">
                        <div class="form-group">
                          <label class="custom-label" for="exampleFormControlInput1"><?php echo __('ch1'); ?></label>
                          <input type="text" class="form-control custom-input" id="exampleFormControlInput1" name="nom" placeholder="Entrez votre nom">
                        </div>
                      </div>
                      <div class="col-xl-12">
                        <div class="form-group">
                          <label class="custom-label" for="exampleFormControlInput5"><?php echo __('phone'); ?></label>
                          <input type="text" class="form-control custom-input" name="phone" id="exampleFormControlInput5" placeholder="Entrez votre telephone">
                        </div>
                      </div>
                      <div class="col-xl-12">
                        <div class="form-group">
                          <label class="custom-label" for="exampleFormControlInput2"><?php echo __('ch2'); ?></label>
                          <input type="email" class="form-control custom-input" id="exampleFormControlInput2" placeholder="Entrez votre email">
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="form-group">
                        <label class="custom-label" for="exampleFormControlTextarea1"><?php echo __('ch4'); ?></label>
                        <textarea class="form-control custom-textarea" name="message" id="exampleFormControlTextarea1" placeholder="<?php echo __('ch4'); ?>"></textarea>
                      </div>
                    </div>
                    <button type="submit" class="submit-btn"><?php echo __('ch5'); ?></button>
                  </form>
                </div>
              </div>
              <!-- <div class="col-xl-6">
                <iframe class="map-frame" src="https://www.google.com/maps/embed/v1/place?q=Dhaka,+Bangladesh&amp;key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" width="600" height="450" style="border: 15px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div> -->
            </div>
          </div>
        </div>
      </div>
      <!-- End-of contact-->
<?php
$titre = 'contact';
$content = ob_get_clean();
require_once "./views/client/template.php";
?>
