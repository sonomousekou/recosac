<header>
      <div class="header-area-three" >
        <div class="main-header">
          <!-- Top -->
          <?php 
              require_once('./views/client/includes/header_contact_info.inc.php');
          ?>

          <!-- Bottom -->
          <div class="header-bottom header-sticky">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <div class="header-left d-flex align-items-center justify-content-between">
                      <div class="logo logo-large light-logo">
                        <a href="index.php?route=home"><img src="./public/assets/images/logo/RECOSAC.png" alt="logo"></a>
                      </div>
                      <!-- Logo Mobile-->
                      <div class="logo logo-mobile light-logo">
                        <a href="index.php?route=home"><img src="./public/assets/images/icon/favicon.png" alt="img"></a>
                      </div>
                    </div>
                    <div class="search-container">
                      <input type="text" id="searchField" class="search-field" placeholder="Search...">
                      <button id="closeSearch" class="close-search-btn"><i class="ri-close-line"></i></button>
                    </div>
                  <!-- Main-menu for desktop -->
                  <div class="main-menu d-none d-lg-block">
                    <?php 
                         require_once('./views/client/includes/navbar.inc.php');
                    ?>
                  </div>
                  
                  <div class="header-right">
                    <div class="cart">
                        <!-- search button -->
                      <!--  <a href="javascript:void(0)" class="rounded-btn search-bar"><i class="ri-search-line"></i></a> -->
                        <?php
                            require_once './views/client/includes/lang_select.inc.php';
                        ?>
                        <ul class="cart">
                        </li>
                          <li class="cart-list d-lg-inline-block">
                            <a href="index.php?route=dons" class="btn-primary-fill text-uppercase">
                              <span class="pera"><?php echo __('don'); ?></span>
                            </a>
                          </li>
                      </ul>
                    </div>
                  </div>
                </div>
                  <!-- Mobile Menu -->
                  <div class="div">
                    <div class="mobile_menu d-block d-lg-none"></div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header end -->
