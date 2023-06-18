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

    public function serveLogin(){
        $this->view->showLogin();
    }

    public function verify() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->model->getUserByUsername($username);

        if (isset($user) && !empty($user) && isset($username) && !empty($username) && isset($password) && !empty($password) && password_verify($password, $user['password'])) {
            AuthHelper::start();
            AuthHelper::setUser($user);
            $_SESSION['user'] = $user;
            $_SESSION['logged_in'] = true;

            header("Location: " . BASE_URL . 'Opciones');
            exit();
        } else {
            $this->view->showLogin('login incorrecto');
        }
    }

    public function logout() {
        AuthHelper::logout();
        header("Location: " . BASE_URL . 'home');
        exit();
    }

    public function getAlltours()
    {
        return $this->tourscontroller->getModel()->gettours();
    }

    public function getAllcruceros()
    {
        return $this->cruceroscontroller->getModel()->getcruceros();
    }

    public function showOptions()
    {
        $this->view->mostrar_options();
    }
}
