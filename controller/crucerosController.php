<?php
require_once('libs/Smarty.class.php');
require_once('views/cruceroView.php');
require_once('models/cruceroModel.php');
require_once('controller/toursController.php');
class crucerosController{
    private $view;
    private $model;
    private $toursController;
    public function __construct(){
        $this->view= new cruceroView();
        $this->model= new cruceroModel();
    }
    public function getAllcruceros(){
        return $this->model->getcruceros();
    }
    public function showCrucero() {
        $this->toursController = new ToursController();
        $id = $_GET['id']; // Obtener id
        $crucero = $this->model->getcrucero($id); // Obtener el crucero con el id
        $tours_ids = $this->toursController->getModel()->getIds($id); // Acceder al modelo a través del método getModel()
        $tours = array(); // Inicializar un arreglo vacío para almacenar los tours
    
        // Obtener los tours correspondientes a cada ID
        foreach ($tours_ids as $tour_id) {
            $tour = $this->toursController->getModel()->getTour($tour_id); // Acceder al modelo a través del método getModel()
            $tours[] = $tour; // Agregar el tour al arreglo
        }
    
        $this->view->mostrar_cruc($crucero, $tours);
    }
    public function show(){
        $cruceros=$this->getAllcruceros();
        $this->view->mostrar_crucero($cruceros);
    }
    public function show_home(){
        $cruceros=$this->model->getcruceros();
        $this->view->mostrar_home($cruceros);
    }
    public function getModel() {
        return $this->model;
    }
}