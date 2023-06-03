<?php
/* Smarty version 4.3.1, created on 2023-06-03 20:41:13
  from 'C:\xampp\htdocs\ejemplos\jazmin\templates\tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647b89490a74d5_11311922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed68e3fbd90697461fc2e7e94adefad95f5a2bed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemplos\\jazmin\\templates\\tour.tpl',
      1 => 1685817670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647b89490a74d5_11311922 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="tour">
    <h2><?php echo $_smarty_tpl->tpl_vars['tour']->value->destino;?>
</h2>
    <div class="fotos_destino_tour">
        <img class="foto_1tour" src="<?php echo $_smarty_tpl->tpl_vars['tour']->value->img1;?>
" alt="imagen del destino">
        <img class="foto_1tour" src="<?php echo $_smarty_tpl->tpl_vars['tour']->value->img2;?>
" alt="imagen del destino">
    </div>

    <h6 class="tour_detalles"><?php echo $_smarty_tpl->tpl_vars['tour']->value->detalles;?>
</h6>
    <h2>Acerca del viaje...</h2>
    <h6 class="tour_detalles">
        El tour sale el día <?php echo $_smarty_tpl->tpl_vars['tour']->value->fecha_salida;?>
. En el crucero <?php echo $_smarty_tpl->tpl_vars['crucero']->value->nombre;?>
 de la compañía <?php echo $_smarty_tpl->tpl_vars['crucero']->value->compania;?>

        a un increible costo de $<?php echo $_smarty_tpl->tpl_vars['tour']->value->precio;?>
 por persona.
        Este crucero tiene una capacidad de <?php echo $_smarty_tpl->tpl_vars['crucero']->value->capacidad;?>
 tripulantes. Sale desde <?php echo $_smarty_tpl->tpl_vars['crucero']->value->origen;?>
 y va hacia 
        <?php echo $_smarty_tpl->tpl_vars['tour']->value->destino;?>

    </h6>
    <div class="fotos_destino_tour">
    <img class="foto_1tour" src="<?php echo $_smarty_tpl->tpl_vars['crucero']->value->img1;?>
" alt="imagen del destino">
    <img class="foto_1tour" src="<?php echo $_smarty_tpl->tpl_vars['crucero']->value->img2;?>
" alt="imagen del destino">
</div>
</section>

</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
