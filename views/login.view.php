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
        $smarty->display('templates/AdministrarTours.tpl'); // Mostrar el template
    }
    function mostrar_options() {
        $smarty = new Smarty();
        $smarty->assign('cruceros', 'Cruceros'); // Asignar la lista de cruceros
        $smarty->assign('tours', 'Tours'); // Asignar la lista de tours
        $smarty->assign('imagen_crucero', 'images/photo-1599640842225-85d111c60e6b.jpg'); // Asignar la lista de tours
        $smarty->assign('imagen_tours', 'images/images.jpg'); // Asignar la lista de tours
        $smarty->display('templates/options.tpl'); // Mostrar el template
    }
}