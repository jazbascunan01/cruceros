<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"
        href="{BASE_URL}images/vecteezy_cruise-ship-sticker-design-with-sea-and-sunset-view_23401374_468.png">
    <!--logo en la pestaña del navegador-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--api de leflet-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <!--api de leflet-->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin="">
    </script>
    <script src="{BASE_URL}script/main.js"></script>
    <link rel="stylesheet" href="{BASE_URL}css/estilo.css"><!-- Estilo de css -->
    <title>Ocean Dream</title>
</head>

<body>
    <header>
        <figure class="logo">
            <img class="logotipo"
                src="{BASE_URL}images/vecteezy_cruise-ship-sticker-design-with-sea-and-sunset-view_23401374_468.png"
                alt="Logo" />
        </figure>
        <div class="titulo">
            <h1>Ocean Dream</h1>
        </div>
    </header>
    <nav>
        <!--Barra de navegación-->
        <div class="menu_desplegable">
            <div class="btn_menu">
                <a><img class="menu_logo" src="{BASE_URL}images/588a64e0d06f6719692a2d10.png" alt="Logo de menu"></a>
                <a>MENÚ</a>
            </div>
            <span class="slogan">Tu mejor plan comienza con nosotros</span>
        </div>
        <ul class="navigation">
            <!--barra de navegacion-->
            <li class="slogan">Tu mejor plan comienza con nosotros</li>
            <li class="item"><img class="logo_nav" id="nav_home"
                    src="{BASE_URL}images/395-3953291_vacation-house-check-form-new-home-builder-icon.png"
                    alt="logo home"><a href="{BASE_URL}home" class="route" id="home">Home</a></li>
            <li class="item"><img class="logo_nav" id="nav_destinos" src="{BASE_URL}images/854996.png"
                    alt="logo destinos"><a href="{BASE_URL}tours" class="route" id="destino">Tours</a></li>

            <li class="item"><img class="logo_nav" id="nav_tipos" src="{BASE_URL}images/logo_tipos_de_viajes.png"
                    alt="logo tipos"><a href="{BASE_URL}cruceros" class="route" id="tipos_de_viajes">cruceros</a></li>


            {if AuthHelper::checkloginlogout()}
                <li class="item" id="nav_administrador">
                <img class="logo_nav" id="nav_administrador" src="{BASE_URL}images/log_admin.png"
                    alt="logo admin">
                <a href="{BASE_URL}Opciones">Administrador</a>
            </li>
                <li class="item" id="nav_administrador">
                    <img class="logo_nav" id="nav_administrador" src="{BASE_URL}images/logo_administrador.png"
                        alt="logo admin">
                    <a href="{BASE_URL}logout">Cerrar Sesión</a>
                </li>
            {else}
                <li class="item" id="nosotros"><img class="logo_nav" id="nav_nosotros"
                        src="{BASE_URL}images/logo_de_nosotross.png" alt="logo nosotros"><a class="route" id="nosotross"
                        href="{BASE_URL}Nosotros">Nosotros</a> </li>
                <li class="item" id="contacto"><img class="logo_nav" id="nav_contacto"
                        src="{BASE_URL}images/logo_contacto.png" alt="logo contacto"><a class="route" id="contactos"
                        href="{BASE_URL}Contactos">Contacto</a> </li>
                <li class="item" id="nav_administrador">
                    <img class="logo_nav" id="nav_administrador" src="{BASE_URL}images/logo_administrador.png"
                        alt="logo admin">
                    <a href="{BASE_URL}login">Iniciar Sesión</a>
                </li>
            {/if}
            </li>

        </ul>
</nav>