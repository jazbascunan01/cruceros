<?php
class toursView
{
    function mostrar_tours($tours)
    {
        $smarty = new Smarty();
        $smarty->assign('tours', $tours);
        $smarty->display('templates/tours.tpl'); // muestro el template    
    }
}