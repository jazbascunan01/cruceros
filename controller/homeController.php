<?php
require_once('libs/Smarty.class.php');
require_once('views/homeView.php');
require_once('models/homeModel.php');
class HomeController{
    private $view;
    private $model;
    public function __construct(){
        $this->view= new homeView();
        $this->model= new homeModel();
    }
    public function show(){
        $cruceros=$this->model->getcruceros();
        $this->view->mostrar_home($cruceros);
    }
}
