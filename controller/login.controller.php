<?php
include_once('./views/login.view.php');
include_once('./models/user.model.php');
include_once('controller/toursController.php');
require_once('controller/crucerosController.php');
require_once('./helpers/AuthHelper.php');

class LoginController
{

    private $view;
    private $model;
    private $tourscontroller;
    private $cruceroscontroller;
    private $authHelper;

    public function __construct()
    {
        $this->view = new LoginView();
        $this->model = new UserModel();
        $this->tourscontroller = new ToursController();
        $this->cruceroscontroller = new crucerosController();
        $this->authHelper = new AuthHelper();
    }

    public function showLogin()
    {
        $this->view->showLogin(array('error' => '')); // Pasa un argumento vacío o el mensaje de error que desees mostrar

    }
    
    

    public function verifyUser()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $this->model->getByUsername($username);
        }
        // encontró un user con el username que mandó, y tiene la misma contraseña
        if (!empty($user) && password_verify($password, $user->password)) {
            $this->authHelper->login($user);
            header('Location: Opciones');
        } else {
            $this->view->showLogin("Login incorrecto"); // Pasa el argumento $error
        }
    }
    
    public function logout() {
        $this->authHelper->logout();
        header('Location: home');
    }
    public function getAlltours()
    {
        return $this->tourscontroller->getModel()->gettours();
    }
    public function getAllcruceros()
    {
        return $this->cruceroscontroller->getModel()->getcruceros();
    }
    public function show_tours()
    {
        $cruceros = $this->getAllcruceros(); //Obtener los cruceros con el crucero controller
        $tours = $this->getAlltours(); //obtener todos los tours del model
        $this->view->mostrar_tours($cruceros, $tours);
    }

    public function showOptions()
    {
        $this->view->mostrar_options();
    }
    public function show_form_agregar_tours()
    {
        $cruceros = $this->getAllcruceros(); //Obtener los cruceros con el crucero controller
        $tours = $this->getAlltours(); //obtener todos los tours del model
        $this->view->mostrar_agregar($cruceros, $tours);
    }
    public function show_form_editar_tours($tourId)
    {
        $cruceros = $this->getAllcruceros();
        $tour = $this->tourscontroller->getModel()->gettour($tourId);
        $this->view->mostrar_editar($cruceros, $tour);
    }

}