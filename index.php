
<?php
session_start();
/*if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    echo "Vous etes connecte";
}
else {
    echo "Vous n'etes pas connecte";
}*/
//echo session_id();
date_default_timezone_set('Europe/Paris');

include_once "./includes/html.php";
include_once "./includes/header.php";
include_once "./pages/contact.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
else {
    $page = "accueil";
}
$path = "./includes/";
$contenu = glob($path . "*.inc.php");
$page = $path . $page . ".inc.php";
if (in_array($page, $contenu)) {
    include_once $page;
}
else {
    include_once "./includes/accueil.inc.php";
}
include_once "./includes/footer.php";




