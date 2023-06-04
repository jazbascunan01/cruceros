<?php
require_once('libs/Smarty.class.php');
require_once('views/cruceroView.php');
require_once('models/cruceroModel.php');
require_once('models/toursModel.php');

class CruceroController {
    private $view;
    private $model;
    private $toursModel;

    public function __construct() {
        $this->view = new cruceroView();
        $this->model = new cruceroModel();
        $this->toursModel = new toursModel();
    }

    public function show() {
        $id = $_GET['id']; // Obtener id
        $crucero = $this->model->getcrucero($id); // Obtener el crucero con el id
        $tours_ids = $this->toursModel->getids($id); // Obtener un arreglo de IDs de tours
        $tours = array(); // Inicializar un arreglo vacío para almacenar los tours
    
        // Obtener los tours correspondientes a cada ID
        foreach ($tours_ids as $tour_id) {
            $tour = $this->toursModel->gettour($tour_id);
            $tours[] = $tour; // Agregar el tour al arreglo
        }
    
        $this->view->mostrar_cruc($crucero, $tours);
    }
}