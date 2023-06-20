<?php
class cruceroView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }
    function mostrar_crucero($cruceros)
    {
        $this->smarty->assign('cruceros', $cruceros);
        $this->smarty->display('templates/cruceros.tpl'); // muestro el template    
    }
    function mostrar_cruc($crucero, $tour)
    {
        if (isset($crucero->descripcion)) {
            $this->smarty->assign('cruc', $crucero);
            $this->smarty->assign('tours', $tour);
            $this->smarty->display('templates/crucero.tpl');
        } else {
            echo "El crucero no existe o no tiene una descripción válida.";
        }
    }
    function mostrar_home($cruceros)
    {
        $this->smarty->assign('cruceros', $cruceros);
        $this->smarty->display('templates/home.tpl'); // muestro el template    
    }
    public function showLogin($logged_in)
    {
        $this->smarty->assign('logged_in', $logged_in);
        $this->smarty->display('templates/header.tpl');
    }
    function mostrar_cruceros_Admin($cruceros, $tours)
    {
        $this->smarty->assign('cruceros', $cruceros); // Asignar la lista de cruceros
        $this->smarty->assign('tours', $tours); // Asignar la lista de tours
        $this->smarty->display('templates/AdministrarCruceros.tpl'); // Mostrar el template
    }
    function mostrar_agregar($cruceros, $tours)
    {
        $this->smarty->assign('cruceros', $cruceros);
        $this->smarty->assign('tours', $tours); // Asignar la lista de tours
        $this->smarty->display('templates/agregarCrucero.tpl'); // Mostrar el template
    }
    public function showError($msgError)
    {
        $this->smarty->assign('msg', $msgError);
        $this->smarty->display('error.tpl');
    }
    function mostrar_editar($crucero)
    {
        $this->smarty->assign('crucero', $crucero);
        $this->smarty->display('templates/editarCrucero.tpl'); // Mostrar el template
    }
    public function showDeleteCruceroConfirmation($id)
    {
        $this->smarty->assign('id', $id);
        $this->smarty->assign('page', 'Eliminar Crucero');
        $this->smarty->display('deleteCrucero.tpl');
    }
    public function showNosotros()
    {
        $this->smarty->display('Nosotros.tpl');
    }
    public function showContactos()
    {
        $this->smarty->display('Contactos.tpl');
    }

}