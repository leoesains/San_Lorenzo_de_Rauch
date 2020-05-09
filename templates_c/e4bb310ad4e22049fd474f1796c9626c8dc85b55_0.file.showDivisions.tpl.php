<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-09 00:18:50
  from 'C:\xampp\htdocs\proyectos\Web 2\San_Lorenzo_de_Rauch\templates\showDivisions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb5dacac88757_25202218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4bb310ad4e22049fd474f1796c9626c8dc85b55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web 2\\San_Lorenzo_de_Rauch\\templates\\showDivisions.tpl',
      1 => 1588976325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5eb5dacac88757_25202218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="contenedorTablaDivisiones">
        <table class="table">
            <caption>LISTA DE DIVISIONES TEMPORADA 2020</caption>
            <thead>
                <tr>
                    <th class="thDivision">NOMBRE</th>
                    <th class="thDivision">EDAD LIMITE</th>
                    <th class="thDivision">CANTIDAD JUGADORES</th>
                    <th class="thDivision">ALGUNAS OBSERVACIONES</th>
                    <th class="thDivision">JUGADORES</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaDivisiones']->value, 'division');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['division']->value) {
?> 
                    <tr>
                        <td>
                            <b><?php echo $_smarty_tpl->tpl_vars['division']->value->nombre_div;?>
</b>
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['division']->value->edad_limite;?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['division']->value->limite_jugadores_LBF;?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['division']->value->excepciones;?>

                        </td>
                        <td>
                            <a href="divisiones_jugadores/<?php echo $_smarty_tpl->tpl_vars['division']->value->id_division;?>
">Ver</a>    
                        </td>
                     </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
            </tbody>
        </table>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
