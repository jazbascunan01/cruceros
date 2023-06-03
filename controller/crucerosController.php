<?php
require_once('libs/Smarty.class.php');
require_once('views/cruceroView.php');
require_once('models/cruceroModel.php');

class crucerosController{
    private $view;
    private $model;
    public function __construct(){
        $this->view= new cruceroView();
        $this->model= new cruceroModel();
    }
    public function show(){
        $cruceros=$this->model->getcruceros();
        $this->view->mostrar_crucero($cruceros);
    }
}