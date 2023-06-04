<?php
/* Smarty version 4.3.1, created on 2023-06-05 00:30:20
  from 'C:\xampp\htdocs\ejemplos\jazmin\templates\tours.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647d107c6b7fe0_35126990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '856ffabda0e0890873c6db670e0473c53c87aa80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemplos\\jazmin\\templates\\tours.tpl',
      1 => 1685917815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647d107c6b7fe0_35126990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Tours</h2>
<form method="get" action="filtrar" class="formfilter">
    <label class="labelfiltro" for="crucero">Seleccionar Crucero:</label>
    <select class="selectfiltro" name="crucero" id="crucero">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cruceros']->value, 'crucero');
$_smarty_tpl->tpl_vars['crucero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['crucero']->value) {
$_smarty_tpl->tpl_vars['crucero']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['crucero']->value->ID;?>
"><?php echo $_smarty_tpl->tpl_vars['crucero']->value->nombre;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <button class="buttonfiltro" type="submit"><img class= "logo_nav" id= "btnfilter"src="images/6488674.png" alt="logo filtrar"></button>
</form>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
