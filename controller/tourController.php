<?php
require_once('libs/Smarty.class.php');
require_once('views/toursView.php');
require_once('models/toursModel.php');
class TourController{
    private $view;
    private $model;
    public function __construct(){
        $this->view= new toursView();
        $this->model= new toursModel();
    }
    public function show(){
        echo("Hola");
        $id = $_GET['id'];
        $tour = $this->model->gettour($id); // Cambio gettours() a gettour()
        print_r($tour);
        $this->view->mostrar_tour($tour, $id);
    }
}
