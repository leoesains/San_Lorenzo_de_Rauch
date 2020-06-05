<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-05 15:25:29
  from 'C:\xampp\htdocs\proyectos\Web 2\San_Lorenzo_de_Rauch\templates\showHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eda47c9155916_94885382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49c02ae4f1f147b32d04c6d13d34d54368b7dee0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web 2\\San_Lorenzo_de_Rauch\\templates\\showHome.tpl',
      1 => 1591363526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.admin.tpl' => 1,
    'file:header.home.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5eda47c9155916_94885382 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>     <?php $_smarty_tpl->_subTemplateRender('file:header.admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
ob_start();
echo !$_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>     <?php $_smarty_tpl->_subTemplateRender('file:header.home.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php ob_start();
echo $_smarty_tpl->tpl_vars['error']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>
    <div class="alert alert-danger contenedor-alert-usuario">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
<?php }?>

<div class="contenedorFrase">
    <h1>Institución dedicada a la Enseñanza del Deporte y la Formación Humana de niños, jóvenes y adultos</h1>
    <p class="frase">"Todos tenemos sueños, pero para que se vuelvan realidad se necesita una gran determinación, dedicación, autodisciplina y esfuerzo."</P>
</div>

    
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
