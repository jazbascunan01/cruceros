<?php
require_once('libs/Smarty.class.php');

class toursView
{
    function mostrar_tours($tours)
    {
        $smarty = new Smarty();
        $smarty->assign('tours', $tours);
        $smarty->display('templates/tours.tpl'); // Muestro el template    
    }

    function mostrar_tour($tour, $id)
    {   
        $smarty = new Smarty();
        
        if (isset($tour->descripcion)) {
            $smarty->assign('tour', $tour);
            $smarty->display('templates/tour.tpl');
        } else {
            echo "El tour no existe o no tiene una descripción válida.";
        }
    }
}