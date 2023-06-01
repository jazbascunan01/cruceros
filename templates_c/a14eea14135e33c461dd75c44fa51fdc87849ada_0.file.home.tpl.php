<?php
/* Smarty version 4.3.1, created on 2023-06-01 14:41:18
  from 'C:\xampp\htdocs\ejemplos\jazmin\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647891ee0931c8_55385131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a14eea14135e33c461dd75c44fa51fdc87849ada' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemplos\\jazmin\\templates\\home.tpl',
      1 => 1685623275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647891ee0931c8_55385131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="content">
    <article class="contenido">
        <!--gran contenedor para  todo el contenido de la pagina web-->
        <article class="primer_imagen_de_fondo">
            <h2>Infórmate acerca de viajes con nuestros expertos</h2>
            <!--fondo de chica con remo-->
        </article>

        <article class="fotos_de_vacaciones">
            <h3 class="titulo_corto">Empezá a disfrutar ahora de tu viaje comprando con el mejor precio y la mejor
                financiación</h3>
            <section class="contenedor_imagenes">
                <figure class="contenedor_fig">
                    <img class="anterior" id="anterior" src="images/318477.png" alt="Botón de anterior">
                </figure>
                <figure class="image">
                    <img class="imag" id="imag" src="images/imagen0.jpg" alt="Familia en silla aérea">
                </figure>
                <figure class="contenedor_fig">
                    <img class="siguiente" id="siguiente" src="images/318476.png" alt="Botón de siguiente">
                </figure>
            </section>

            <section class="galeria">
                <!--imagenes una al lado de la otra tipo galería-->
                <figure class="imagenes">
                    <img class="imagen" src="images/imagen0.jpg" alt="Familia en la nieve" />
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="images/imagen1.jpg" alt="Pareja conociendo lugares" />
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="images/imagen2.jpg" alt="Pareja en un lago" />
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="images/imagen3.jpg" alt="Amigas en la playa" />
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="images/imagen4.jpg" alt="Pareja en la playa" />
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="images/imagen5.jpg" alt="Hombre con un globo terraqueo" />
                </figure>
            </section>
        </article>
        <article class="servicios">

            <h3 class="titulo_largo">
                Conocé nuestra increíble oferta de vuelos, hoteles, paquetes turísticos, alquiler de autos, actividades,
                cruceros,
                trenes y seguros para tu viaje. Contamos con excelentes promociones a los mejores destinos para tus
                vacaciones.
            </h3>
            <article class="recuadros">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cruceros']->value, 'crucero');
$_smarty_tpl->tpl_vars['crucero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['crucero']->value) {
$_smarty_tpl->tpl_vars['crucero']->do_else = false;
?>

                    <section class="recuadro">
                        <img class="foto_menu" src=<?php echo $_smarty_tpl->tpl_vars['crucero']->value->img1;?>
 alt="Paisaje de montañas">
                        <h4><?php echo $_smarty_tpl->tpl_vars['crucero']->value->nombre;?>
</h4>
                        <p><?php echo $_smarty_tpl->tpl_vars['crucero']->value->descripcion;?>

                        </p>
                    </section>
                <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


            </article>
        </article>

    </article>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
