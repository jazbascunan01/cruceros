<?php
/* Smarty version 4.3.1, created on 2023-06-01 15:47:51
  from 'C:\xampp\htdocs\ejemplos\jazmin\templates\tours.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6478a18785ca88_28018051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '856ffabda0e0890873c6db670e0473c53c87aa80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemplos\\jazmin\\templates\\tours.tpl',
      1 => 1685627156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6478a18785ca88_28018051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
        <h4><?php echo $_smarty_tpl->tpl_vars['tour']->value->destino;?>
</h4>
        <p><?php echo $_smarty_tpl->tpl_vars['tour']->value->descripcion;?>

        </p>
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
