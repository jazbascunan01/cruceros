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
    header('Location: ' . BASE_URL . 'home'); // acción por defecto si no envían
}
$partesURL = explode('/', $_GET['action']);

switch ($partesURL[0]) {
    case 'home':
        $crucerosc->show_home();
        break;
    case 'tours':
        $toursc = new ToursController;
        $toursc->show();
        break;
    case 'tour':
        $toursc = new ToursController;
        $toursc->showTour($partesURL[1]);
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
        $controller->serveLogin();
        break;
    case 'logout':
        $loginController = new LoginController();
        $loginController->logout();
        break;
    case 'verify':
        $controller = new LoginController();
        $controller->verify();
        break;
    case 'Opciones':
        $controller = new LoginController();
        $controller->showOptions();
        break;
    case 'AdministrarTours':
        $controller = new ToursController();
        $controller->show_tours();
        break;
    case 'AgregarTour':
        $controller = new ToursController();
        $controller->show_form_agregar_tours();
        break;
    case 'ConfirmarAgregar':
        $controller = new ToursController();
        $controller->addTours();
        break;
    case 'eliminar':
        $controller = new ToursController();
        $controller->deleteTour($partesURL[1]);
        break;
    case 'editar':
        $controller = new ToursController();
        $controller->show_form_editar_tours($partesURL[1]);
        break;
    case 'editarTour':
        $controller = new ToursController();
        $controller->editTour($partesURL[1]);
        break;
}