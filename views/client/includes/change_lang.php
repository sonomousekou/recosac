<?php
// Démarrage de la session
session_start();

// Vérification de la langue sélectionnée
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    
    // Vérifiez si la langue est valide (ajoutez vos propres vérifications si nécessaire)
    if ($lang === 'en' || $lang === 'fr') {
        $_SESSION['lang'] = $lang;
    }
}

// Vérification de la route spécifiée
if (isset($_GET['route'])) {
    $route = $_GET['route'];
    
    // Vérifiez si la route est valide (ajoutez vos propres vérifications si nécessaire)
    if ($route === 'home' || $route === 'quisommesnous' || $route === 'notrehistoire' || $route==='contextenational' || $route==='structuressanitaires' || $route==='notregouvernance'
    || $route==='articles' || $route==='projets' || $route==='contact' || $route==='partenaires' || $route==='evenements' || $route==='contact_success'
      ||  $route === 'dons' || $route==='detail_article') {
        // Redirection vers la page spécifiée par la route
        header("Location: /index.php?lang=" . urlencode($_SESSION['lang']) . "&route=" . urlencode($route));
        exit();
    }
}

// Redirection par défaut en cas de paramètres invalides
header("Location: /index.php");
exit();
?>
