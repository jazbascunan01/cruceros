<?php
require_once('libs/Smarty.class.php');
require_once('views/toursView.php');
require_once('models/toursModel.php');
require_once('models/cruceroModel.php');

class TourController {
    private $view;
    private $model;
    private $cruceroModel;

    public function __construct() {
        $this->view = new toursView();
        $this->model = new toursModel();
        $this->cruceroModel = new cruceroModel();
    }

    public function show() {
        $id = $_GET['id'];
        $tour = $this->model->gettour($id);
        $crucero_id = $tour->id_crucero;
        $crucero = $this->cruceroModel->getcrucero($crucero_id);
        $this->view->mostrar_tour($tour, $crucero);
    }
}
