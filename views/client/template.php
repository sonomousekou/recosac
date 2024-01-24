<!DOCTYPE html>
<html lang="en" dir="lrt">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<title><?= $titre ?> | RECOSAC-G </title>
    <?php 
        require_once('./views/client/includes/head.inc.php');
    ?>
 </head>
  <body>

        <?php
            // require_once './views/client/includes/preloader.inc.php';
        ?>

    <!-- Header start -->
    <?php 
        require_once('./views/client/includes/header.inc.php');
    ?>
    <!-- Header end -->

    <main>
      <?= $content ?>

      <?php 
        // require_once('./views/client/includes/galerie.inc.php');
        ?>

    </main>

    <!-- Footer area start -->

        <?php 
        require_once('./views/client/includes/footer.inc.php');
        ?>

    <!-- Footer area end -->
    <?php 
    // require_once('./views/client/includes/transition.inc.php');
    ?>

    <div class="overlay"></div>
    <?php 
    require_once('./views/client/includes/scripts.inc.php');
    ?>
  </body>
</html>
