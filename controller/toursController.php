<?php
require_once('libs/Smarty.class.php');
require_once('views/toursView.php');
require_once('models/toursModel.php');
require_once('controller/crucerosController.php');
class ToursController
{
    private $view;
    private $model;
    private $cruceroscontroller;
    public function __construct()
    {
        $this->view = new toursView();
        $this->model = new toursModel();
        $this->cruceroscontroller = new crucerosController();
    }

    public function getAlltours(){
        return $this->model->gettours();
    }

    public function getAllcruceros(){
        return $this->cruceroscontroller->getModel()->getcruceros();
    }

    public function show()
    {
        $cruceros = $this->getAllcruceros(); //Obtener los cruceros con el crucero controller
        $tours = $this->getAlltours();//obtener todos los tours del model
        $this->view->mostrar_tours($cruceros, $tours);
    }
    public function showTour() {
        $id = $_GET['id'];
        $tour = $this->model->gettour($id);
        $crucero_id = $tour->id_crucero;
        $crucero = $this->cruceroscontroller->getModel()->getcrucero($crucero_id);
        $this->view->mostrar_tour($tour, $crucero);
    }
    public function filtrar()
    {
        // Obtener el crucero seleccionado del formulario
        $cruceroSeleccionado = $_GET['crucero'];

        // Obtener los tours correspondientes al crucero seleccionado
        $tours = $this->model->getToursByCrucero($cruceroSeleccionado);

        // Obtener todos los cruceros para cargar el select
        $cruceros = $this->cruceroscontroller->getModel()->getCruceros();

        // Asignar los datos a la vista
        $this->view->mostrarToursFiltrados($cruceros, $tours);
    }

    public function getModel()
    {
        return $this->model;
    }

}