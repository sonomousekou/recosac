<?php ob_start() ?>
   <!-- Thank you start -->
   <section class="thanks pt-100 pb-100" style="background-image: url('./public/assets_client/img/bg/bg-abt.jpg');" data-overlay="9">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="thank-outer z-5">
                    <div class="thank-icon flex-center">
                        <img src="./public/assets_client/img/career/hand.png" alt="">
                    </div>
                    <h3 class="f-700">Thank you! We have recieved your contact request.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor lorem, tempor elementum eros a, tempor aliquet tellus. Proin id arcu lorem.</p>
                    <a href="index.php?route=home" class="btn btn-round mt-10">Go Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Thank you end -->


<?php
$titre = __('contact_success');
$content = ob_get_clean();
require_once "./views/client/template.php";
?>
