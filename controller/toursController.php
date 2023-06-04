<?php
require_once('libs/Smarty.class.php');
require_once('views/toursView.php');
require_once('models/toursModel.php');

class ToursController {
    private $view;
    private $model;
    
    public function __construct() {
        $this->view = new toursView();
        $this->model = new toursModel();
    }
    
    public function show() {
        $tours = $this->model->gettours();
        $cruceros = $this->model->getcruceros();
        $this->view->mostrar_tours($tours, $cruceros);
    }
    
    public function showByCrucero() {
        $cruceroId = isset($_GET['crucero_id']) ? $_GET['crucero_id'] : null;
        $tours = $this->model->getToursByCrucero($cruceroId);
        $cruceros = $this->model->getcruceros();
    
        // Verificar si $cruceros es un array y ajustar su estructura si es necesario
        if (is_array($cruceros)) {
            $cruceros = array_map(function($crucero) {
                return (object) [
                    'ID' => $crucero['ID'],
                    'nombre' => $crucero['nombre']
                ];
            }, $cruceros);
        }
    
        $this->view->mostrar_tours($tours, $cruceros, $cruceroId);
    }
    
    
}
