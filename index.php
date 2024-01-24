<?php
session_start();

require_once './config/config.php';

require_once './lang/'.($_SESSION['lang'] ?? 'fr') .'/translations.php';

function __($key){
	global $translations;
	return isset($translations[$key]) ? $translations[$key] : $key;
}

$lang = $_GET['lang'] ?? $_SESSION['lang'] ?? 'fr';

$_SESSION['lang']= $lang;


// Routes
$route = $_GET['route'] ?? 'home';

$views = [
	'home' => './views/client/home.view.php',
	'quisommesnous' => './views/client/quisommesnous.view.php',
	'notrehistoire' => './views/client/notrehistoire.view.php',
	'contextenational' => './views/client/contextenational.view.php',
	'structuressanitaires' => './views/client/structuressanitaires.view.php',
	'notregouvernance' => './views/client/notregouvernance.view.php',
	'articles' => './views/client/articles.view.php',
	'projets' => './views/client/projets.view.php',
	'contact' => './views/client/contact.view.php',
	'partenaires' => './views/client/partenaires.view.php',
	'evenements' => './views/client/evenements.view.php',
	'contact_success' => './views/client/contact_success.view.php',
	'dons' => './views/client/dons.view.php',
	'detail_article' => './views/client/detail_article.view.php',

];

if (array_key_exists($route, $views)){
	include $views[$route];
}else{
	include './views/client/erreur404.view.php';
}
?>
