    <!-- Footer S t a r t -->
    <footer>
      <div class="footer-wrapper footer-bg-one">
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
          <div class="container">
            <div class="footer-border">
              <div class="row">
                <div class="col-xl-12">
                  <div class="footer-copy-right text-center">
                    <p class="pera"><?php echo $copy; ?> - <?php echo __('tf'); ?>.</p>
                    <div class="footer-social-link">
                      <ul class="listing">
                        <li class="single-list">
                          <a class="single" href="<?php if ($lien_facebook =="") echo "javascript:void(0)"; else echo $lien_facebook; ?>"><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li class="single-list">
                          <a class="single" href="<?php if ($lien_youtube =="") echo "javascript:void(0)"; else echo $lien_youtube; ?> "><i class="ri-youtube-fill"></i></a>
                        </li>
                        <li class="single-list">
                          <a class="single" href="<?php if ($lien_instagram =="") echo "javascript:void(0)"; else echo $lien_instagram; ?> "><i class="ri-instagram-line"></i></a>
                        </li>
                        <li class="single-list">
                          <a class="single" href="<?php if ($lien_linkedin =="") echo "javascript:void(0)"; else echo $lien_linkedin; ?>"><i class="ri-linkedin-fill"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End-of Footer -->