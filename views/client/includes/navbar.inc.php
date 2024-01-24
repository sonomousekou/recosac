<?php
// Définissez la variable $activePage en fonction de la page actuellement affichée
$activePage = 'home'; // Par défaut, définissez la page d'accueil comme active

// Vérifiez si la clé "route" existe dans $_GET avant de l'utiliser
if (isset($_GET['route'])) {
    if ($_GET['route'] === 'quisommesnous') {
        $activePage = 'quisommesnous';
    } elseif ($_GET['route'] === 'notrehistoire') {
        $activePage = 'notrehistoire';
    } elseif ($_GET['route'] === 'contextenational') {
        $activePage = 'contextenational';
    } elseif ($_GET['route'] === 'structuressanitaires') {
        $activePage = 'structuressanitaires';
    } elseif ($_GET['route'] === 'notregouvernance') {
        $activePage = 'notregouvernance';
    } elseif ($_GET['route'] === 'partenaires') {
        $activePage = 'partenaires';
    } elseif ($_GET['route'] === 'evenements') {
        $activePage = 'evenements';
    } elseif ($_GET['route'] === 'articles') {
        $activePage = 'articles';
    } elseif ($_GET['route'] === 'projets') {
        $activePage = 'projets';
    } elseif ($_GET['route'] === 'contact') {
        $activePage = 'contact';
    }
}

// Utilisez la variable $activePage pour déterminer quelle page est active dans votre menu
?>

<nav>
    <ul class="listing" id="navigation">
        <li class="single-list" <?php if ($activePage === 'home') echo 'class="active"'; ?>><a class="single" href="index.php?route=home"><?php echo __('home'); ?></a></li>
        <li class="single-list" 
        <?php if (in_array($activePage, ['quisommesnous', 'notrehistoire', 'contextenational', 'structuressanitaires', 'notregouvernance', 'partenaires'])) echo 'class="active"'; ?>>
            <a href="javascript:void(0)" class="single"><?php echo __('nd'); ?> <i class="ri-arrow-down-s-line"></i></a>
            <ul class="submenu">
                <li class="single-list" <?php if ($activePage === 'quisommesnous') echo 'class="active"'; ?>>
                    <a href="index.php?route=quisommesnous" class="single"><?php echo __('quisommesnous'); ?></a>
                </li>
                <li class="single-list" <?php if ($activePage === 'notrehistoire') echo 'class="active"'; ?>>
                    <a href="index.php?route=notrehistoire" class="single"><?php echo __('notrehistoire'); ?></a>
                </li>
                <li class="single-list" <?php if ($activePage === 'contextenational') echo 'class="active"'; ?>>
                    <a href="index.php?route=contextenational" class="single"><?php echo __('contextenational'); ?></a>
                </li>
                <li class="single-list" <?php if ($activePage === 'structuressanitaires') echo 'class="active"'; ?>>
                    <a href="index.php?route=structuressanitaires" class="single"><?php echo __('structuressanitaires'); ?></a>
                </li>
                <li class="single-list" <?php if ($activePage === 'notregouvernance') echo 'class="active"'; ?>>
                    <a href="index.php?route=notregouvernance" class="single"><?php echo __('notregouvernance'); ?></a>
                </li>
                <li class="single-list" <?php if ($activePage === 'partenaires') echo 'class="active"'; ?>>
                    <a href="index.php?route=partenaires" class="single"><?php echo __('partenaires'); ?></a>
                </li>
            </ul>
        </li>
        <li class="single-list" <?php if ($activePage === 'projets') echo 'class="active"'; ?>>
                <a href="index.php?route=projets" class="single"><?php echo __('projets'); ?></a>
        </li>

        <li class="single-list" <?php if ($activePage === 'contact') echo 'class="active"'; ?>>
            <a href="index.php?route=contact" class="single">Contact</a>
        </li>
        
    </ul>
</nav>
