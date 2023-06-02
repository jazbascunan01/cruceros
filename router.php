<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once('controller/homeController.php');
require_once('controller/toursController.php');
require_once('controller/tourController.php');
$homec = new HomeController;
$toursc = new ToursController;
$tourc=new TourController;
if (!empty($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

switch ($action) {
    case 'home':
        $homec->show();
        break;
    case 'tours':
        $toursc->show();
        break;
    case 'tour':
        $tourc->show();
        break;
}