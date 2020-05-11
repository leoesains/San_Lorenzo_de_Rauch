<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-10 21:06:07
  from 'C:\xampp\htdocs\proyectos\Web 2\San_Lorenzo_de_Rauch\templates\showPlayers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb8509fc5f7b1_10043695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd05bafbb728904ff7bcae246ab3a0d45b7535067' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web 2\\San_Lorenzo_de_Rauch\\templates\\showPlayers.tpl',
      1 => 1589137346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5eb8509fc5f7b1_10043695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="contenedorTablaJugadores">
        <table class="table table-fixed">
            <caption>LISTA DE JUGADORES TEMPORADA 2020</caption>
            
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaJugadores']->value, 'jugador');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
?>
                    <tr>
                        <td id="nombre">
                            <b><a href="verJugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['jugador']->value->nombre, 'UTF-8');?>
</a></b>
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
