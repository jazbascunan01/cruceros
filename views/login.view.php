<?php
require_once('libs/Smarty.class.php');

class LoginView
{

    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }

    public function showLogin($username = null)
    {
        $this->smarty->assign('titulo', 'Iniciar Sesión');
        $this->smarty->assign('username', $username);
        $this->smarty->display('templates/login.tpl');
    }
    
    public function mostrar_options()
    {
        $authHelper = new AuthHelper();
        $this->smarty->assign('logged_in', $authHelper->checkLoggedIn());
        $this->smarty->assign('cruceros', 'Cruceros'); // Asignar la lista de cruceros
        $this->smarty->assign('tours', 'Tours'); // Asignar la lista de tours
        $this->smarty->assign('imagen_crucero', 'images/photo-1599640842225-85d111c60e6b.jpg'); // Asignar la lista de tours
        $this->smarty->assign('imagen_tours', 'images/images.jpg'); // Asignar la lista de tours
        $this->smarty->display('templates/options.tpl');
    }


    public function setLoggedStatus($loggedIn)
    {
        $this->smarty->assign('logged_in', $loggedIn);
    }
}

