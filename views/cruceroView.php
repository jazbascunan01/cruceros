<?php
class cruceroView
{
    function mostrar_crucero($cruceros, $tours) {
        $smarty = new Smarty();
        $smarty->assign('cruceros', $cruceros);
        $smarty->assign('tours', $tours);
        $smarty->display('templates/cruceros.tpl');
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
}