<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-16 14:30:54
  from 'C:\xampp\htdocs\proyectos\Web 2\San_Lorenzo_de_Rauch\templates\showDivisions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebfdcfeb07fc2_88469031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4bb310ad4e22049fd474f1796c9626c8dc85b55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web 2\\San_Lorenzo_de_Rauch\\templates\\showDivisions.tpl',
      1 => 1589632205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ebfdcfeb07fc2_88469031 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="conteiner contenedor_divisiones">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaDivisiones']->value, 'division');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['division']->value) {
?> 
            <div class="contenedor_show_division">
                <div>
                    <b><?php echo $_smarty_tpl->tpl_vars['division']->value->nombre_div;?>
</b>
                </div>
                <div>
                    <?php echo $_smarty_tpl->tpl_vars['division']->value->edad_limite;?>

                </div>
                <div></div>
                    <?php echo $_smarty_tpl->tpl_vars['division']->value->limite_jugadores_LBF;?>

                </div>
                <div>
                    <?php echo $_smarty_tpl->tpl_vars['division']->value->excepciones;?>

                </div>
                <div></div>
                    <a href="divisiones_jugadores/<?php echo $_smarty_tpl->tpl_vars['division']->value->id_division;?>
">Ver</a>
                </div>          
            </div>    
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
