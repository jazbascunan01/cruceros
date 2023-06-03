<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once('controller/homeController.php');
require_once('controller/toursController.php');
require_once('controller/tourController.php');
require_once('controller/crucerosController.php');
require_once('controller/cruceroController.php');
$toursc = new ToursController;
$tourc = new TourController;
$homec = new homeController;
$crucerosc = new crucerosController;
$cruceroc = new cruceroController;
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
    case 'cruceros':
        $crucerosc->show();
        break;
    case 'crucero':
        $cruceroc->show();
        break;
}