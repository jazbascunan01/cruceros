<?php
ini_set('memory_limit', '1024M'); // Aumenta el límite de memoria a 1 GB

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
        $toursc->show();
        break;
    case 'tour':
        $toursc->showTour($partesURL[1]);
        break;
    case 'cruceros':
        $crucerosc->show();
        break;
    case 'crucero':
        $crucerosc->showCrucero();
        break;
    case 'Nosotros':
        $crucerosc->showNosotros();
        break;
    case 'Contactos':
        $crucerosc->showContactos();
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
        $toursc->show_tours();
        break;
    case 'AgregarTour':
        $toursc->show_form_agregar_tours();
        break;
    case 'ConfirmarAgregar':
        $toursc->addTours();
        break;
    case 'eliminar':
        $toursc->deleteTour($partesURL[1]);
        break;
    case 'deleteTourConfirm':
        $toursc->deleteT($partesURL[1]);
        break;
    case 'editar':
        $toursc->show_form_editar_tours($partesURL[1]);
        break;
    case 'editarTour':
        $toursc->editTour($partesURL[1]);
        break;
    case 'AdministrarCruceros':
        $crucerosc->show_cruceros();
        break;
    case 'AgregarCrucero':
        $crucerosc->show_form_agregar_crucero();
        break;
    case 'ConfirmarAgregarCrucero':
        $crucerosc->addCrucero();
        break;
    case 'editarCrucero':
        $crucerosc->show_form_editar_cruceros($partesURL[1]);
        break;
    case 'editarCruceros':
        $crucerosc->editCrucero($partesURL[1]);
        break;
    case 'eliminarCrucero':
        $crucerosc->deleteCrucero($partesURL[1]);
        break;
    case 'deleteCruceroConfirm':
        $crucerosc->deleteC($partesURL[1]);
        break;
}