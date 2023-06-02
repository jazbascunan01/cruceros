<?php
/* Smarty version 4.3.1, created on 2023-06-03 00:52:29
  from 'C:\xampp\htdocs\ejemplos\jazmin\templates\tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647a72adb27b05_52929531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed68e3fbd90697461fc2e7e94adefad95f5a2bed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemplos\\jazmin\\templates\\tour.tpl',
      1 => 1685746224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647a72adb27b05_52929531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="tour">
    <h2>
        <?php echo $_smarty_tpl->tpl_vars['tour']->value->destino;?>

    </h2>
    <h3>
        <?php echo $_smarty_tpl->tpl_vars['tour']->value->detalles;?>

    </h3>
</section>

</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
