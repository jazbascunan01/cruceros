<?php
/* Smarty version 4.3.1, created on 2023-06-05 01:24:41
  from 'C:\xampp\htdocs\ejemplos\jazmin\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647d1d39b217c6_42785385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37ca6e883ccf12fa9dc432c478cdfb280ac9318b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemplos\\jazmin\\templates\\header.tpl',
      1 => 1685826031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647d1d39b217c6_42785385 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logotipo-viaje-detallado_23-2148616611.png">
    <!--logo en la pestaña del navegador-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilo.css"><!-- Estilo de css -->
    <title>J&J Travel Agency</title>
</head>

<body>
    <header>
        <figure class="logo">
            <img class="logotipo" src="images/vecteezy_cruise-ship-sticker-design-with-sea-and-sunset-view_23401374_468.png" alt="Logo" />
        </figure>
        <div class="titulo">
            <h1>Ocean Dream</h1>
        </div>
    </header>
    <nav>
        <!--Barra de navegación-->
        <div class="menu_desplegable">
            <div class="btn_menu">
                <a><img class="menu_logo" src="images/588a64e0d06f6719692a2d10.png" alt="Logo de menu"></a>
                <a>MENÚ</a>
            </div>
            <span class="slogan">Tu mejor plan comienza con nosotros</span>
        </div>
        <ul class="navigation">
            <!--barra de navegacion-->
            <li class="slogan">Tu mejor plan comienza con nosotros</li>
            <li class="item"><img class="logo_nav" id="nav_home"
                    src="images/395-3953291_vacation-house-check-form-new-home-builder-icon.png" alt="logo home"><a
                    href="home" class="route" id="home">Home</a></li>
            <li class="item"><img class="logo_nav" id="nav_destinos" src="images/854996.png" alt="logo destinos"><a href="tours"
                    class="route" id="destino">Tours</a></li>

            <li class="item"><img class="logo_nav" id="nav_tipos" src="images/logo_tipos_de_viajes.png"
                    alt="logo tipos"><a href="cruceros" class="route" id="tipos_de_viajes">cruceros</a></li>
            <li class="item" id="nosotros"><img class="logo_nav" id="nav_nosotros" src="images/logo_de_nosotross.png"
                    alt="logo nosotros"><a class="route" id="nosotross">Nosotros</a> </li>
            <li class="item" id="contacto"><img class="logo_nav" id="nav_contacto" src="images/logo_contacto.png"
                    alt="logo contacto"><a class="route" id="contactos">Contacto</a> </li>
            <li class="item"><img class="logo_nav" id="nav_administrador" src="images/logo_administrador.png"
                    alt="logo admin"><a class="route" id="administrador">Iniciar sesión</a></li>
        </ul>
    </nav>
<?php }
}
