<?php
class homeView
{
    function mostrar_home($cruceros)
    {
        $smarty = new Smarty();
        $smarty->assign('cruceros', $cruceros);
        $smarty->display('templates/home.tpl'); // muestro el template    
    }
}