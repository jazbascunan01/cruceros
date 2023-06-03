<?php
require_once('libs/Smarty.class.php');
require_once('views/homeView.php');
require_once('models/cruceroModel.php');
class HomeController{
    private $view;
    private $model;
    public function __construct(){
        $this->view= new homeView();
        $this->model= new cruceroModel();
    }
    public function show(){
        $cruceros=$this->model->getcruceros();
        $this->view->mostrar_home($cruceros);
    }
}
