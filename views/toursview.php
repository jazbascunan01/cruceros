<?php
require_once('libs/Smarty.class.php');

class toursView
{
    public function showLogin($logged_in)
    {
        $smarty = new Smarty();
        $this->$smarty->assign('logged_in', $logged_in);
        $this->$smarty->display('templates/header.tpl');
    }
    function mostrar_tours($cruceros, $tours)
    {
        $smarty = new Smarty();
        $smarty->assign('cruceros', $cruceros); // Asignar la lista de cruceros
        $smarty->assign('tours', $tours); // Asignar la lista de tours
        $smarty->display('templates/tours.tpl'); // Mostrar el template
    }

    function mostrar_tour($tour, $crucero)
    {
        $smarty = new Smarty();

        if (isset($tour->descripcion)) {
            $smarty->assign('tour', $tour);
            $smarty->assign('crucero', $crucero);
            $smarty->display('templates/tour.tpl');
        } else {
            echo "El tour no existe o no tiene una descripción válida.";
        }
    }
    // toursView.php

    function mostrarToursFiltrados($cruceros, $tours)
    {
        $smarty = new Smarty();
        $smarty->assign('cruceros', $cruceros);
        $smarty->assign('tours', $tours);
        $smarty->display('templates/tours.tpl');
    }
    public function editar($tour)
    {
        $smarty = new Smarty();
        $smarty->assign('tour', $tour);
        $smarty->display('templates/editarTour.tpl');
    }
    public function showError($msgError)
    {
        echo "<h1>ERROR!</h1>";
        echo "<h2>{$msgError}</h2>";
    }
    function mostrar_tours_Admin($cruceros, $tours)
    {
        $smarty = new Smarty();
        $smarty->assign('cruceros', $cruceros); // Asignar la lista de cruceros
        $smarty->assign('tours', $tours); // Asignar la lista de tours
        $smarty->display('templates/AdministrarTours.tpl'); // Mostrar el template
    }
    function mostrar_agregar($cruceros, $tours)
    {
        $smarty = new Smarty();
        $smarty->assign('cruceros', $cruceros);
        $smarty->assign('tours', $tours); // Asignar la lista de tours
        $smarty->display('templates/agregarTour.tpl'); // Mostrar el template
    }
    function mostrar_editar($cruceros, $tour)
    {
        $smarty = new Smarty();
        $smarty->assign('cruceros', $cruceros);
        $smarty->assign('tour', $tour); // Asignar la lista de tours
        $smarty->display('templates/editarTour.tpl'); // Mostrar el template
    }

}