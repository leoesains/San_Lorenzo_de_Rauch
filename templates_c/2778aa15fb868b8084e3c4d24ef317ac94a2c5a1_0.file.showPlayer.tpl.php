<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-19 05:40:53
  from 'C:\xampp\htdocs\proyectos\Web 2\San_Lorenzo_de_Rauch\templates\showPlayer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec35545ddee72_26093318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2778aa15fb868b8084e3c4d24ef317ac94a2c5a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web 2\\San_Lorenzo_de_Rauch\\templates\\showPlayer.tpl',
      1 => 1589859651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ec35545ddee72_26093318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="titulo_mostrar_jugadores ancho">
        <p><b>PERFILES JUGADORES</b> TEMPORADA <b> 2020</b></p>
    </div>
    <div class="contenedorPerfil">
        <div>
            <img class="imagen_perfil"src="<?php echo $_smarty_tpl->tpl_vars['datosJug']->value->imagen;?>
">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>                 <h4><a class="btn btn-danger centrar btn_alta" href="editar_jugador/<?php echo $_smarty_tpl->tpl_vars['datosJug']->value->id_jugador;?>
"><b>Editar Jugador</b></a></h4>
                <h4><a class="btn btn-danger centrar btn_alta" href="eliminar_jugador/<?php echo $_smarty_tpl->tpl_vars['datosJug']->value->id_jugador;?>
"><b>Baja del Jugador</b></a></h4>
                <h4><a class="btn btn-danger centrar btn_alta" href="listar_jugadores"><b>Volver</b></a>;
            <?php }?>
        </div>
        <div class="datosJugador">
            <p id="nombre_jugador_perfil"><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->nombre;?>
</p>
            <h1><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->puesto;?>
</h1>
            <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 1) {?>
                <h3><b>PRIMERA DIVISIÓN</b></h3>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 2) {?>
                <h3><b>SEGUNDA DIVISIÓN</b></h3>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 3) {?>
                <h3><b>TERCERA DIVISIÓN</b></h3>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 4) {?>
                <h3><b>CUARTA DIVISIÓN</b></h3>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 5) {?>
                <h3><b>QUINTA DIVISIÓN</b></h3>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 6) {?>
                <h3><b>SEXTA DIVISIÓN</b></h3>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 7) {?>
                <h3><b>SÉPTIMA DIVISIÓN</b></h3>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 8) {?>
                <h3><b>OCTAVA DIVISIÓN</b></h3>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 9) {?>
                <h3><b>NOVENA DIVISIÓN</b></h3>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 10) {?>
                <h3><b>DÉCIMA DIVISIÓN</b></h3>
            <?php }?>
            <br><h4><b>EDAD</b></h4>
            <h3><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->edad;?>
 años</h3>
            <h4><b>FECHA DE NACIMIENTO</b></h4>
            <h3><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->fecha_nac;?>
</h3>
            <h4><b>CARNET</b></h4>
            <h3><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->carnet;?>
</h3>
            <h4><b>CLUB AL QUE PERTENECE EL PASE</b></h4>
            <h3><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->club_origen;?>
</h3>
        </div>
        <div class="contenedorTablaJugadores">
            <div class="otros_perfiles">
                <p class="titulo_otros_perfiles"><b>OTROS PERFILES</b></p>
            </div>
            <div class="contenedorTablaJugadores">    
                <table class="table-fixed">
                    <tbody>
                        <tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaJugadores']->value, 'jugador');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
?>
                                <td id="nombre">
                                    <div class="col-sm">
                                        <?php if ($_smarty_tpl->tpl_vars['jugador']->value->puesto == "ARQUERO") {?>
                                            <h6><a  class="fila" href="ver_jugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
">ARQ | <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</a></h6>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['jugador']->value->puesto == "DEFENSOR") {?>
                                            <h6><a class="fila" href="ver_jugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
">DEF | <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</a></h6>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['jugador']->value->puesto == "VOLANTE") {?>
                                            <h6><a  class="fila" href="ver_jugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
">VOL | <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</a></h6>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['jugador']->value->puesto == "DELANTERO") {?>
                                            <h6><a  class="fila" href="ver_jugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
">DEL | <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</a></h6>
                                        <?php }?>
                                    </div>
                                </td>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>      
                        </tr>
                    </tbody>
                </table>
            </div>    
        </div>
    </div>
        
 
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
