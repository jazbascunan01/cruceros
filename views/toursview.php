<?php
require_once('libs/Smarty.class.php');

class toursView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }
    public function showLogin($logged_in)
    {
        $this->smarty->assign('logged_in', $logged_in);
        $this->smarty->display('templates/header.tpl');
    }
    function mostrar_tours($cruceros, $tours)
    {
        $this->smarty->assign('cruceros', $cruceros); // Asignar la lista de cruceros
        $this->smarty->assign('tours', $tours); // Asignar la lista de tours
        $this->smarty->display('templates/tours.tpl'); // Mostrar el template
    }

    function mostrar_tour($tour, $crucero)
    {
        if (isset($tour->descripcion)) {
            $this->smarty->assign('tour', $tour);
            $this->smarty->assign('crucero', $crucero);
            $this->smarty->display('templates/tour.tpl');
        } else {
            echo "El tour no existe o no tiene una descripción válida.";
        }
    }
    // toursView.php

    function mostrarToursFiltrados($cruceros, $tours)
    {
        $this->smarty->assign('cruceros', $cruceros);
        $this->smarty->assign('tours', $tours);
        $this->smarty->display('templates/tours.tpl');
    }
    public function editar($tour)
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('tour', $tour);
        $this->smarty->display('templates/editarTour.tpl');
    }
    public function showError($msgError)
    {
        echo "<h1>ERROR!</h1>";
        echo "<h2>{$msgError}</h2>";
    }
    function mostrar_tours_Admin($cruceros, $tours)
    {
        $this->smarty->assign('cruceros', $cruceros); // Asignar la lista de cruceros
        $this->smarty->assign('tours', $tours); // Asignar la lista de tours
        $this->smarty->display('templates/AdministrarTours.tpl'); // Mostrar el template
    }
    function mostrar_agregar($cruceros, $tours)
    {
        $this->smarty->assign('cruceros', $cruceros);
        $this->smarty->assign('tours', $tours); // Asignar la lista de tours
        $this->smarty->display('templates/agregarTour.tpl'); // Mostrar el template
    }
    function mostrar_editar($cruceros, $tour)
    {
        $this->smarty->assign('cruceros', $cruceros);
        $this->smarty->assign('tour', $tour); // Asignar la lista de tours
        $this->smarty->display('templates/editarTour.tpl'); // Mostrar el template
    }

}