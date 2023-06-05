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
}