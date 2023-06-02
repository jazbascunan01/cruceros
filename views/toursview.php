<?php
require_once('libs/Smarty.class.php');
class toursView
{
    function mostrar_tours($tours)
    {
        $smarty = new Smarty();
        $smarty->assign('tours', $tours);
        $smarty->display('templates/tours.tpl'); // muestro el template    
    }
    function mostrar_tour($tour, $id)
    {   
        echo"Mostrar tour";
        print_r($tour);
        $smarty = new Smarty();
        $smarty->assign('tour', $tour);
        $smarty->assign('id', $id);
        $smarty->display('templates/tour.tpl'); // muestro el template    
    }
}