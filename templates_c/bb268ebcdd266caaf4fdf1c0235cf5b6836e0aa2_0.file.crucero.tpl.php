<?php
/* Smarty version 4.3.1, created on 2023-06-04 01:08:15
  from 'C:\xampp\htdocs\ejemplos\jazmin\templates\crucero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647bc7df7d4789_50194651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb268ebcdd266caaf4fdf1c0235cf5b6836e0aa2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemplos\\jazmin\\templates\\crucero.tpl',
      1 => 1685833692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647bc7df7d4789_50194651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="crucero">
    <h2><?php echo $_smarty_tpl->tpl_vars['cruc']->value->nombre;?>
</h2>
    <div class="fotos_crucero">
        <img class="foto_1crucero" src="<?php echo $_smarty_tpl->tpl_vars['cruc']->value->img1;?>
" alt="imagen del crucero">
        <img class="foto_1crucero" src="<?php echo $_smarty_tpl->tpl_vars['cruc']->value->img2;?>
" alt="imagen del crucero">
    </div>
    <h6 class="crucero_detalles">
        <?php echo $_smarty_tpl->tpl_vars['cruc']->value->detalles;?>

        <br>Este crucero pertenece a la compañia <?php echo $_smarty_tpl->tpl_vars['cruc']->value->compania;?>
, y parte desde <?php echo $_smarty_tpl->tpl_vars['cruc']->value->origen;?>
. Cuenta con una capacidad de
        <?php echo $_smarty_tpl->tpl_vars['cruc']->value->capacidad;?>
 personas.
    </h6>

    <h2>Tours que ofrece el <?php echo $_smarty_tpl->tpl_vars['cruc']->value->nombre;?>
</h2>
    <article class="recuadros">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tours']->value, 'tour');
$_smarty_tpl->tpl_vars['tour']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tour']->value) {
$_smarty_tpl->tpl_vars['tour']->do_else = false;
?>
            <section class="recuadro">
                <img class="foto_menu" src=<?php echo $_smarty_tpl->tpl_vars['tour']->value->img1;?>
 alt="Paisaje de montañas">
                <?php echo $_smarty_tpl->tpl_vars['tour']->value->ID;?>

                <a class="link_tour" type="submit" href="tour?id=<?php echo $_smarty_tpl->tpl_vars['tour']->value->ID;?>
">
                    <h4 class="link_tour"><?php echo $_smarty_tpl->tpl_vars['tour']->value->destino;?>
</h4>
                </a>
                <p><?php echo $_smarty_tpl->tpl_vars['tour']->value->descripcion;?>
</p>
                <a class="link_tour" type="submit" href="tour?id=<?php echo $_smarty_tpl->tpl_vars['tour']->value->ID;?>
">Leer mas</a>
            </section>
        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


    </article>
</section>

</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
