<?php
class cruceroView
{
    function mostrar_home($cruceros)
    {
        $smarty = new Smarty();
        $smarty->assign('cruceros', $cruceros);
        $smarty->display('templates/cruceros.tpl'); // muestro el template    
    }
}