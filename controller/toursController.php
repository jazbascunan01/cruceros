<?php
require_once('libs/Smarty.class.php');
require_once('views/toursView.php');
require_once('models/toursModel.php');
class ToursController{
    private $view;
    private $model;
    public function __construct(){
        $this->view= new toursView();
        $this->model= new toursModel();
    }
    public function show(){
        $tours=$this->model->gettours();
        $this->view->mostrar_tours($tours);
    }
}