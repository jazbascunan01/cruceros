<?php
/* Smarty version 4.3.1, created on 2023-06-04 00:21:31
  from 'C:\xampp\htdocs\ejemplos\jazmin\templates\crucero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647bbceb7c0cd0_72267995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb268ebcdd266caaf4fdf1c0235cf5b6836e0aa2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemplos\\jazmin\\templates\\crucero.tpl',
      1 => 1685830888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647bbceb7c0cd0_72267995 (Smarty_Internal_Template $_smarty_tpl) {
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
</section>

</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
