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
        $id = $_GET['id'];//Obtener id
        $crucero = $this->model->getcrucero($id);//obtener el crucero con el id
        $tours_id = $this->toursModel->getid($id);
        $tour = $this->toursModel->gettour($tours_id);
        $this->view->mostrar_cruc($crucero, $tour);
    }
}