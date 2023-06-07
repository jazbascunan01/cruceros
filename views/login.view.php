<?php
require_once('libs/Smarty.class.php');

class LoginView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }

    public function showLogin($error = null) {
        $this->smarty->assign('titulo', 'Iniciar Sesión');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }

    function mostrar_tours($cruceros, $tours) {
        $smarty = new Smarty();
        $smarty->assign('cruceros', $cruceros); // Asignar la lista de cruceros
        $smarty->assign('tours', $tours); // Asignar la lista de tours
        $smarty->display('templates/administrador.tpl'); // Mostrar el template
    }
}