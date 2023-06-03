<?php
/* Smarty version 4.3.1, created on 2023-06-03 23:15:21
  from 'C:\xampp\htdocs\ejemplos\jazmin\templates\cruceros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647bad69ec86c9_45923545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '446d91d2b2c3fcc46fc5414d4d4593cabe5161f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemplos\\jazmin\\templates\\cruceros.tpl',
      1 => 1685826744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647bad69ec86c9_45923545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="content">
    <article class="contenido">

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
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
