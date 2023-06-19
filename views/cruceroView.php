<?php
class cruceroView
{
    function mostrar_crucero($cruceros)
    {
        $smarty = new Smarty();
        $smarty->assign('cruceros', $cruceros);
        $smarty->display('templates/cruceros.tpl'); // muestro el template    
    }
    function mostrar_cruc($crucero, $tour) {
        $smarty = new Smarty();

        if (isset($crucero->descripcion)) {
            $smarty->assign('cruc', $crucero);
            $smarty->assign('tours', $tour);
            $smarty->display('templates/crucero.tpl');
        } else {
            echo "El crucero no existe o no tiene una descripción válida.";
        }
    }
    function mostrar_home($cruceros)
    {
        $smarty = new Smarty();
        $smarty->assign('cruceros', $cruceros);
        $smarty->display('templates/home.tpl'); // muestro el template    
    }
    public function showLogin($logged_in)
    {
        $smarty = new Smarty();
        $this->$smarty->assign('logged_in', $logged_in);
        $this->$smarty->display('templates/header.tpl');
    }
    function mostrar_cruceros_Admin($cruceros, $tours)
    {
        $smarty = new Smarty();
        $smarty->assign('cruceros', $cruceros); // Asignar la lista de cruceros
        $smarty->assign('tours', $tours); // Asignar la lista de tours
        $smarty->display('templates/AdministrarCruceros.tpl'); // Mostrar el template
    }
    function mostrar_agregar($cruceros, $tours)
    {
        $smarty = new Smarty();
        $smarty->assign('cruceros', $cruceros);
        $smarty->assign('tours', $tours); // Asignar la lista de tours
        $smarty->display('templates/agregarCrucero.tpl'); // Mostrar el template
    }
    public function showError($msgError)
    {
        echo "<h1>ERROR!</h1>";
        echo "<h2>{$msgError}</h2>";
    }
    function mostrar_editar($crucero)
    {
        $smarty = new Smarty();
        $smarty->assign('crucero', $crucero);
        $smarty->display('templates/editarCrucero.tpl'); // Mostrar el template
    }
}