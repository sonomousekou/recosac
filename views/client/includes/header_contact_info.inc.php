<div class="header-top">
<div class="container">
    <div class="row">
    <div class="col-lg-12 d-none d-lg-block">
        <div class="top-menu">
        <div class="contact-info">
            <a href="javascript:void(0)" class="pera"> <?php echo __('phone'); ?>: <?php echo $tel; ?><span class="pl-20 pr-20">/</span><?php echo $email1; ?> </a>
        </div>
        <div class="header-social-link">
            <ul class="listing">
            <li class="single-list">
                <a href="<?php if ($lien_facebook =="") echo "javascript:void(0)"; else echo $lien_facebook; ?> " target="<?php if ($lien_facebook =="") echo ""; else echo "_blank";?>"  class="single"><i class="ri-facebook-fill"></i></a>
            </li>
            <li class="single-list">
                <a href="<?php if ($lien_youtube =="") echo "javascript:void(0)"; else echo $lien_youtube; ?> " target="<?php if ($lien_youtube =="") echo ""; else echo "_blank";?>" class="single"><i class="ri-youtube-fill"></i></a>
            </li>
            <li class="single-list"> 
                <a href="<?php if ($lien_instagram =="") echo "javascript:void(0)"; else echo $lien_instagram; ?> " target="<?php if ($lien_instagram =="") echo ""; else echo "_blank";?>" class="single"><i class="ri-instagram-line"></i></a>
            </li>
            <li class="single-list">
                <a href="<?php if ($lien_linkedin =="") echo "javascript:void(0)"; else echo $lien_linkedin; ?> " target="<?php if ($lien_linkedin =="") echo ""; else echo "_blank";?>" class="single"><i class="ri-linkedin-fill"></i></a>
            </li>
            </ul>
        </div>
        </div>
        <hr>
    </div>
    </div>
</div>
</div>