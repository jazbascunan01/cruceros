<?php
require_once('libs/Smarty.class.php');

class toursView {
    function mostrar_tours($tours, $cruceros, $cruceroSeleccionado = null) {
        $smarty = new Smarty();
        $smarty->assign('tours', $tours);
        var_dump($cruceros); // Agrega esta línea
        $smarty->assign('cruceros', $cruceros);
        $smarty->assign('cruceroSeleccionado', $cruceroSeleccionado);
        $smarty->display('templates/tours.tpl');
    }
    
    function mostrar_tour($tour, $crucero) {
        $smarty = new Smarty();

        if (isset($tour->descripcion)) {
            $smarty->assign('tour', $tour);
            $smarty->assign('crucero', $crucero);
            $smarty->display('templates/tour.tpl');
        } else {
            echo "El tour no existe o no tiene una descripción válida.";
        }
    }
}

