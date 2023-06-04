<?php
require_once('libs/Smarty.class.php');
require_once('views/cruceroView.php');
require_once('models/cruceroModel.php');
require_once('models/toursModel.php');
require_once('views/toursview.php');

class CruceroController {
    private $view;
    private $model;
    private $toursModel;
    private $toursView;

    public function __construct() {
        $this->view = new cruceroView();
        $this->model = new cruceroModel();
        $this->toursModel = new toursModel();
        $this->toursView = new toursView();
    }

    public function show() {
        $id = $_GET['crucero_id']; // Obtener id
        $crucero = $this->model->getcrucero($id); // Obtener el crucero con el id
        $tours_ids = $this->toursModel->getids($id); // Obtener un arreglo de IDs de tours
        $tours = array(); // Inicializar un arreglo vacío para almacenar los tours
    
        // Obtener los tours correspondientes a cada ID
        foreach ($tours_ids as $tour_id) {
            $tour = $this->toursModel->gettour($tour_id);
            $tours[] = $tour; // Agregar el tour al arreglo
        }
    
        $this->toursModel->gettours();
        $this->toursView->mostrar_tours($tours,$crucero);
    }
}