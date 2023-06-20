<?php
require_once('libs/Smarty.class.php');
require_once('views/toursView.php');
require_once('models/toursModel.php');
require_once('controller/crucerosController.php');
class ToursController
{
    private $view;
    private $model;
    private $cruceroscontroller;
    public function __construct()
    {
        $this->view = new toursView();
        $this->model = new toursModel();
        $this->cruceroscontroller = new crucerosController();
    }

    public function getAlltours()
    {
        return $this->model->gettours();
    }

    public function getAllcruceros()
    {
        return $this->cruceroscontroller->getModel()->getcruceros();
    }

    public function show()
    {
        $cruceros = $this->getAllcruceros(); //Obtener los cruceros con el crucero controller
        $tours = $this->getAlltours(); //obtener todos los tours del model
        $this->view->mostrar_tours($cruceros, $tours);
    }
    public function showTour($id)
    {
        $tour = $this->model->gettour($id);
        $crucero_id = $tour->id_crucero;
        $crucero = $this->cruceroscontroller->getModel()->getcrucero($crucero_id);
        $this->view->mostrar_tour($tour, $crucero);
    }
    public function filtrar()
    {
        // Obtener el crucero seleccionado del formulario
        $cruceroSeleccionado = $_GET['crucero'];

        // Obtener los tours correspondientes al crucero seleccionado
        $tours = $this->model->getToursByCrucero($cruceroSeleccionado);

        // Obtener todos los cruceros para cargar el select
        $cruceros = $this->cruceroscontroller->getModel()->getCruceros();

        if (empty($tours)) {
            $this->view->showError("No hay tours disponibles para el crucero seleccionado.");
        } else {
            $this->view->mostrarToursFiltrados($cruceros, $tours);
        }
        // Asignar los datos a la vista
        
    }
    public function addTours()
    {
        AuthHelper::checklogin();
        $id_crucero = $_POST['crucero'];
        $destino = $_POST['destino'];
        $fecha_salida = $_POST['fecha_salida'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $rutaTempImagen = $_FILES['imagen']['tmp_name'];
        $rutaTempImagen2 = $_FILES['imagen2']['tmp_name'];
        $detalles = $_POST['detalles'];

        if (!empty($destino) && !empty($id_crucero) && !empty($fecha_salida) && !empty($precio) && !empty($descripcion) && !empty($detalles)) {
            if (is_numeric($precio) && strlen($destino) <= 150 && strlen($descripcion) <= 2000 && strlen($detalles) <= 4000) {
                if (($_FILES['imagen']['type'] == 'image/jpeg')&&($_FILES['imagen2']['type'] == 'image/jpeg')) {
                    $this->model->save($id_crucero, $destino, $fecha_salida, $precio, $descripcion, $rutaTempImagen,$rutaTempImagen2, $detalles);
                    header("Location: AdministrarTours");
                } else {
                    $this->view->showError("imagen invalida");
                }

            } else {
                $this->view->showError("Datos inválidos");
            }
        } else {
            $this->view->showError("Faltan datos obligatorios");
        }
    }

    public function deleteTour($tour)
    {
        AuthHelper::checklogin();
        $this->view->showDeleteToursConfirmation($tour);
    }
    public function deleteT($id)
    {
        AuthHelper::checklogin();
        if (isset($id) && !empty($id)) {
            $this->model->delete($id);
            header("Location: " . BASE_URL . 'AdministrarTours');
        } else {
            $this->view->showError('No se ha podido eliminar el tour');
        }
    }

    public function editTour($tour)
    {
        AuthHelper::checklogin();
        $id_crucero = $_POST['crucero'];
        $destino = $_POST['destino'];
        $fecha_salida = $_POST['fecha_salida'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $img1 = $_POST['img1'];
        $img2 = $_POST['img2'];
        $detalles = $_POST['detalles'];
        if (!empty($destino) && !empty($id_crucero) && !empty($fecha_salida) && !empty($precio) && !empty($descripcion) && !empty($img1) && !empty($img2) && !empty($detalles)) {
            if (is_numeric($precio) && strlen($destino) <= 150 && strlen($descripcion) <= 2000 && strlen($img1) <= 4000 && strlen($img2) <= 4000 && strlen($detalles) <= 4000) {
                $this->model->editar($tour, $id_crucero, $destino, $fecha_salida, $precio, $descripcion, $img1, $img2, $detalles);
                header("Location: ../AdministrarTours");
            } else {
                $this->view->showError("Datos inválidos");
            }
        } else {
            $this->view->showError("Faltan datos obligatorios");
        }
    }

    public function getModel()
    {
        return $this->model;
    }
    public function show_form_agregar_tours()
    {
        AuthHelper::checklogin();
        $cruceros = $this->getAllcruceros(); //Obtener los cruceros con el crucero controller
        $tours = $this->getAlltours(); //obtener todos los tours del model
        $this->view->mostrar_agregar($cruceros, $tours);
    }
    public function show_form_editar_tours($tourId)
    {
        AuthHelper::checklogin();
        if (isset($tourId) && !empty($tourId)) {
            $cruceros = $this->getAllcruceros();
            if ($this->model->gettour($tourId) === null) {
                $this->view->showError('No se ha podido encontrar el tour');
            } else {
                $tour = $this->model->gettour($tourId);
                $this->view->mostrar_editar($cruceros, $tour);
            }
        } else {
            $this->view->showError('No se ha podido encontrar el tour');
        }
    }
    public function show_tours()
    {
        AuthHelper::checklogin();
        $cruceros = $this->getAllcruceros(); //Obtener los cruceros con el crucero controller
        $tours = $this->getAlltours(); //obtener todos los tours del model
        $this->view->mostrar_tours_admin($cruceros, $tours);
    }

}