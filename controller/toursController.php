<?php
require_once('libs/Smarty.class.php');
require_once('views/toursView.php');
require_once('models/toursModel.php');
require_once('models/cruceroModel.php');
class ToursController{
    private $view;
    private $model;
    private $cruceromodel;
    public function __construct(){
        $this->view= new toursView();
        $this->model= new toursModel();
        $this->cruceromodel= new cruceroModel();
    }
    public function show() {
        $cruceros = $this->cruceromodel->getcruceros();
        $tours = $this->model->gettours();
        $this->view->mostrar_tours($cruceros, $tours); // Cambio de mostrar_tours a mostrar_tours
    }

public function filtrar()
{
    // Obtener el crucero seleccionado del formulario
    $cruceroSeleccionado = $_GET['crucero'];

    // Obtener los tours correspondientes al crucero seleccionado
    $tours = $this->model->getToursByCrucero($cruceroSeleccionado);

    // Obtener todos los cruceros para cargar el select
    $cruceros = $this->cruceromodel->getCruceros();

    // Asignar los datos a la vista
    $this->view->mostrarToursFiltrados($cruceros, $tours);
}

    
}