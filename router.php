<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


require_once('controller/toursController.php');
require_once('controller/crucerosController.php');
require_once('controller/login.controller.php');
$toursc = new ToursController;
$crucerosc = new crucerosController;
if (!empty($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

switch ($action) {
    case 'home':
        $crucerosc->show_home();
        break;
    case 'tours':
        $toursc->show();
        break;
    case 'tour':
        $toursc->showTour();
        break;
    case 'cruceros':
        $crucerosc->show();
        break;
    case 'crucero':
        $crucerosc->showCrucero();
        break;
    case 'filtrar':
        $toursc->filtrar();
        break;
    case 'login':
        $controller = new LoginController();
        $controller->showLogin();
        break;
    case 'verify':
        $controller = new LoginController();
        $controller->verifyUser();
        break;
    case 'Administrador':
        $controller = new LoginController();
        $controller->show();
        break;
}