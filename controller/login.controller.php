<?php
include_once('./views/login.view.php');
include_once('./models/user.model.php');
include_once('controller/toursController.php');
require_once('controller/crucerosController.php');

class LoginController {

    private $view;
    private $model;
    private $tourscontroller;
    private $cruceroscontroller;

    public function __construct() {
        $this->view = new LoginView();
        $this->model = new UserModel();
        $this->tourscontroller = new ToursController();
        $this->cruceroscontroller = new crucerosController();
    }

    public function showLogin() {
        $this->view->showLogin();
    }

    public function verifyUser() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->model->getByUsername($username);

        // encontró un user con el username que mandó, y tiene la misma contraseña
        if (!empty($user) && password_verify($password, $user->password)) {
            header('Location: Opciones');
        } else {
            $this->view->showLogin("Login incorrecto");
        }
    }
    public function getAlltours(){
        return $this->tourscontroller->getModel()->gettours();
    }
    public function getAllcruceros(){
        return $this->cruceroscontroller->getModel()->getcruceros();
    }
    public function show_tours()
    {
        $cruceros = $this->getAllcruceros(); //Obtener los cruceros con el crucero controller
        $tours = $this->getAlltours();//obtener todos los tours del model
        $this->view->mostrar_tours($cruceros, $tours);
    }

    public function showOptions()
    {
        $this->view->mostrar_options();
    }
}