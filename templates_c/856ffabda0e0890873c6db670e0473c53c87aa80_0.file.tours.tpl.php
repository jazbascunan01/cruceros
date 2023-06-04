<?php
/* Smarty version 4.3.1, created on 2023-06-04 15:05:07
  from 'C:\xampp\htdocs\ejemplos\jazmin\templates\tours.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647c8c0336ca36_55658283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '856ffabda0e0890873c6db670e0473c53c87aa80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemplos\\jazmin\\templates\\tours.tpl',
      1 => 1685883901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647c8c0336ca36_55658283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="tourByCrucero" method="GET">
<select name="crucero_id">
    <option value="">Todos los cruceros</option>
    <?php if ($_smarty_tpl->tpl_vars['cruceros']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cruceros']->value, 'crucero');
$_smarty_tpl->tpl_vars['crucero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['crucero']->value) {
$_smarty_tpl->tpl_vars['crucero']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['crucero']->value->ID;?>
" <?php if ($_smarty_tpl->tpl_vars['cruceroSeleccionado']->value == $_smarty_tpl->tpl_vars['crucero']->value->ID) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['crucero']->value->nombre;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</select>

    <input type="submit" value="Mostrar Tours">
</form>


<article class="recuadros">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tours']->value, 'tour');
$_smarty_tpl->tpl_vars['tour']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tour']->value) {
$_smarty_tpl->tpl_vars['tour']->do_else = false;
?>
        <section class="recuadro">
            <img class="foto_menu" src="<?php echo $_smarty_tpl->tpl_vars['tour']->value->img1;?>
" alt="Paisaje de montañas">
            <?php echo $_smarty_tpl->tpl_vars['tour']->value->ID;?>

            <a class="link_tour" href="tour?id=<?php echo $_smarty_tpl->tpl_vars['tour']->value->ID;?>
">
                <h4 class="link_tour"><?php echo $_smarty_tpl->tpl_vars['tour']->value->destino;?>
</h4>
            </a>
            <p><?php echo $_smarty_tpl->tpl_vars['tour']->value->descripcion;?>
</p>
            <a class="link_tour" href="tour?id=<?php echo $_smarty_tpl->tpl_vars['tour']->value->ID;?>
">Leer mas</a>
        </section>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</article>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
