<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-17 05:43:04
  from 'C:\xampp\htdocs\proyectos\Web 2\San_Lorenzo_de_Rauch\templates\showPlayers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec0b2c86be4a1_20685271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd05bafbb728904ff7bcae246ab3a0d45b7535067' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web 2\\San_Lorenzo_de_Rauch\\templates\\showPlayers.tpl',
      1 => 1589686982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ec0b2c86be4a1_20685271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php ob_start();
echo !$_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>         <div class="titulo_mostrar_jugadores">
            <p><b>JUGADORES</b> DEL CLUB PARA LA <b>TEMPORADA 2020</b></p>
        </div>
    <?php }?>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>         <div class="centrar btn_alta">
            <h4><a class="btn btn-danger" href="agregar_jugador"><b>Alta Jugador</b></a></h4>
        </div>
    <?php }?>
    <div class="conteiner contenedor">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaJugadores']->value, 'jugador');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
?>
            <div class="contenedor_show_player centrar">
                <div class="centrar">
                    <div class="alto">
                        <b class="fuente_nombre"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['jugador']->value->nombre, 'UTF-8');?>
</b>
                    </div>
                    <img class="imagen_show_player" src="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->imagen;?>
">
                </div>
                <div class="centrar puesto">
                    <h5><b><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['jugador']->value->puesto, 'UTF-8');?>
</b></h5>
                </div>
                <?php ob_start();
echo !$_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>                     <div class="centrar">
                        <h4><a class="btn btn-danger" href="ver_jugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
"><b>Perfil</b></a></h4>
                    </div>
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4) {?>                     <div class="centrar">
                        <h4><a class="btn btn-danger" href="ver_jugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
"><b>Modificar | Baja</b></a></h4>
                    </div>
                <?php }?>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
    </div>
 
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
