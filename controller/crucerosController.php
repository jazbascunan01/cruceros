<?php

require_once('libs/Smarty.class.php');
require_once('views/cruceroView.php');
require_once('models/cruceroModel.php');
require_once('controller/toursController.php');


class crucerosController
{
    private $view;
    private $model;
    private $toursController;
    public function __construct()
    {
        $this->view = new cruceroView();
        $this->model = new cruceroModel();
    }
    public function getAllcruceros()
    {
        return $this->model->getcruceros();
    }
    public function showCrucero()
    {
        $this->toursController = new ToursController();
        $id = $_GET['id']; // Obtener id
        $crucero = $this->model->getcrucero($id); // Obtener el crucero con el id
        $tours_ids = $this->toursController->getModel()->getIds($id); // Acceder al modelo a través del método getModel()
        $tours = array(); // Inicializar un arreglo vacío para almacenar los tours

        // Obtener los tours correspondientes a cada ID
        foreach ($tours_ids as $tour_id) {
            $tour = $this->toursController->getModel()->getTour($tour_id); // Acceder al modelo a través del método getModel()
            $tours[] = $tour; // Agregar el tour al arreglo
        }

        $this->view->mostrar_cruc($crucero, $tours);
    }
    public function show()
    {
        $cruceros = $this->getAllcruceros();
        $this->view->mostrar_crucero($cruceros);
    }
    public function show_home()
    {
        $cruceros = $this->model->getcruceros();
        $this->view->mostrar_home($cruceros);
    }
    public function show_cruceros()
    {
        $this->toursController = new ToursController();
        AuthHelper::checklogin();
        $cruceros = $this->getAllcruceros(); //Obtener los cruceros con el crucero controller
        $tours = $this->getAlltours(); //obtener todos los tours del model
        $this->view->mostrar_cruceros_admin($cruceros, $tours);

    }
    public function getAlltours()
    {
        $this->toursController = new ToursController();
        return $this->toursController->getmodel()->gettours();
    }
    public function getModel()
    {
        return $this->model;
    }
    public function show_form_agregar_crucero()
    {
        AuthHelper::checklogin();
        $this->toursController = new ToursController();
        $cruceros = $this->getAllcruceros();
        $tours = $this->getAlltours();
        $this->view->mostrar_agregar($cruceros, $tours);
    }
    public function addCrucero()
    {
        AuthHelper::checklogin();
        $nombre = $_POST['nombre'];
        $compania = $_POST['compania'];
        $capacidad = $_POST['capacidad'];
        $origen = $_POST['origen'];
        $img1 = $_POST['img1'];
        $img2 = $_POST['img2'];
        $descripcion = $_POST['descripcion'];
        $detalles = $_POST['detalles'];

        if (!empty($nombre) && !empty($compania) && !empty($capacidad) && !empty($origen) && !empty($descripcion) && !empty($img1) && !empty($img2) && !empty($detalles)) {
            if (strlen($nombre) <= 150 && strlen($compania) <= 150 && strlen($origen) <= 150 && strlen($descripcion) <= 2000 && strlen($img1) <= 4000 && strlen($img2) <= 4000 && strlen($detalles) <= 4000) {
                if ($this->model->cruceroNoExiste($nombre)) {
                    $this->model->save($nombre, $compania, $capacidad, $origen, $img1, $img2, $descripcion, $detalles);
                    header("Location: AdministrarCruceros");
                } else {
                    $this->view->showError("El crucero ya existe");
                }
            } else {
                $this->view->showError("Datos inválidos");
            }
        } else {
            $this->view->showError("Faltan datos obligatorios");
        }
    }
    public function show_form_editar_cruceros($cruceroId)
    {
        AuthHelper::checklogin();
        if (isset($cruceroId) && !empty($cruceroId)) {
            if ($this->model->getcrucero($cruceroId) === null) {
                $this->view->showError('No se ha podido encontrar el crucero');
            } else {
                $crucero = $this->model->getcrucero($cruceroId);
                $this->view->mostrar_editar($crucero);
            }
        } else {
            $this->view->showError('No se ha podido encontrar el crucero');
        }
    }
    public function editCrucero($crucero)
    {
        AuthHelper::checklogin();
        $nombre = $_POST['nombre'];
        $compania = $_POST['compania'];
        $capacidad = $_POST['capacidad'];
        $origen = $_POST['origen'];
        $img1 = $_POST['img1'];
        $img2 = $_POST['img2'];
        $descripcion = $_POST['descripcion'];
        $detalles = $_POST['detalles'];
        if (!empty($nombre) && !empty($compania) && !empty($capacidad) && !empty($origen) && !empty($descripcion) && !empty($img1) && !empty($img2) && !empty($detalles)) {
            if (strlen($nombre) <= 150 && strlen($compania) <= 150 && strlen($origen) <= 150 && strlen($descripcion) <= 2000 && strlen($img1) <= 4000 && strlen($img2) <= 4000 && strlen($detalles) <= 4000) {
                $this->model->editar($crucero, $nombre, $compania, $capacidad, $origen, $img1, $img2, $descripcion, $detalles);
                header("Location: ../AdministrarCruceros");
            } else {
                $this->view->showError("Datos inválidos");
            }
        } else {
            $this->view->showError("Faltan datos obligatorios");
        }
    }
    public function deleteCrucero($crucero)
    {
        AuthHelper::checklogin();
        $this->view->showDeleteCruceroConfirmation($crucero);
    }
    public function deleteC($id){
        AuthHelper::checklogin();
        if(isset($id)&&!empty($id)){
            $this->model->deleteCrucero($id);
            header("Location: " . BASE_URL . 'AdministrarCruceros'); 
        }
        else{
            $this->view->showError('No se ha podido eliminar el Crucero');
        }
    }
    public function showNosotros(){
        $this->view->showNosotros();
    }

}