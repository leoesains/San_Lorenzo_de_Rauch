<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-14 21:11:42
  from 'C:\xampp\htdocs\proyectos\Web 2\San_Lorenzo_de_Rauch\templates\printPlayersByDivision.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebd97eed12bd8_00476854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0fc42ef1d37052f0ecf8dd8ab1bf3689d62defb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web 2\\San_Lorenzo_de_Rauch\\templates\\printPlayersByDivision.tpl',
      1 => 1589409245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ebd97eed12bd8_00476854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="contenedorTablaJugadores">
        <table class="table">
            <caption>JUGADORES POR DIVISION TEMPORADA 2020</caption>
            <thead>
                <tr>
                    <th>JUGADOR</th>
                    <th>DIVISION</th>
                    <th>PERFIL</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadoresXdivisiones']->value, 'jugXdiv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jugXdiv']->value) {
?>
                    <tr>
                        <td>
                            <b><?php echo $_smarty_tpl->tpl_vars['jugXdiv']->value->nombre;?>
</b>
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['jugXdiv']->value->nombre_div;?>

                        </td>
                        <td>
                            <a href="ver_jugador/<?php echo $_smarty_tpl->tpl_vars['jugXdiv']->value->id_jugador;?>
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
