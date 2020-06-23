<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-23 14:51:52
  from 'C:\xampp\htdocs\proyectos\Web 2\San_Lorenzo_de_Rauch\templates\showPlayer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef1fae812d654_62099062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2778aa15fb868b8084e3c4d24ef317ac94a2c5a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web 2\\San_Lorenzo_de_Rauch\\templates\\showPlayer.tpl',
      1 => 1592916710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.admin.tpl' => 1,
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ef1fae812d654_62099062 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>     <?php $_smarty_tpl->_subTemplateRender('file:header.admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
ob_start();
echo !$_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>     <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
<div class="titulo_mostrar_jugadores ancho">
    <p><b>PERFILES JUGADORES</b> TEMPORADA <b> 2020</b></p>
</div>
<div class="contenedorPerfil">
    <div>
        <img class="imagen_perfil"src="<?php echo $_smarty_tpl->tpl_vars['datosJug']->value->imagen;?>
">
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value == "administrador";
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>
            <h6><a class="btn btn-danger centrar btn_alta" href="editar_jugador/<?php echo $_smarty_tpl->tpl_vars['datosJug']->value->id_jugador;?>
"><b>Editar Jugador | 
                <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5h6v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5h5z"/>
                </svg></b>
            </a></h6>
            <h6><a class="btn btn-danger centrar btn_alta" href="eliminar_jugador/<?php echo $_smarty_tpl->tpl_vars['datosJug']->value->id_jugador;?>
"><b>Baja del Jugador | 
                <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h5.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4h6.118zM2.5 3V2h11v1h-11z"/>
                </svg></b>
            </a></h6>
        <?php }?>
        <h6><a class="btn btn-danger centrar btn_alta" href="listar_jugadores"><b>Volver |
            <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 0 1 0 .708L3.207 9l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
            <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 0 1 .5.5v4a2.5 2.5 0 0 1-2.5 2.5h5a.5.5 0 0 1 0-1h8.5A1.5 1.5 0 0 0 13 7V3a.5.5 0 0 1 .5-.5z"/>
            </svg></b>
        </a></h6>

        <div >
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value == "usuario";
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4) {?>
                <form class="contenedor-form-comentario" action="guardar_comentario" method="POST">
                    <textarea class="cajas-form-comentario" name="comentarios" placeholder="COMENTARIO"></textarea>
                    <input type="hidden" name="usuario" value="<?php echo $_smarty_tpl->tpl_vars['nameUser']->value;?>
">
                    <input type="hidden" name="zona_fecha" value="<?php echo date_default_timezone_set("America/Argentina/Buenos_aires");?>
">
                    <input type="hidden" name="fecha" value="<?php echo date("d-m-o");?>
 - <?php echo date("h:i a");?>
">
                    <select class="cajas-form-comentario" name="puntuacion">
                        <option disabled selected>PUNTUACIÓN</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <button type="submit" class="btn btn-danger centrar btn_alta"><b>Publicar</b></button>
                </form>
            <?php }?>
        </div>

    </div>
    <div class="datosJugador">
        <p id="nombre_jugador_perfil"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['datosJug']->value->nombre, 'UTF-8');?>
</p>
        <h3><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->puesto;?>
</h3>
        <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 1) {?>
            <h5><b>PRIMERA DIVISIÓN</b></h5>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 2) {?>
            <h5><b>SEGUNDA DIVISIÓN</b></h5>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 3) {?>
            <h5><b>TERCERA DIVISIÓN</b></h5>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 4) {?>
            <h5><b>CUARTA DIVISIÓN</b></h5>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 5) {?>
            <h5><b>QUINTA DIVISIÓN</b></h5>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 6) {?>
            <h5><b>SEXTA DIVISIÓN</b></h5>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 7) {?>
            <h5><b>SÉPTIMA DIVISIÓN</b></h5>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 8) {?>
            <h5><b>OCTAVA DIVISIÓN</b></h5>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 9) {?>
            <h5><b>NOVENA DIVISIÓN</b></h5>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['datosJug']->value->id_division == 10) {?>
            <h5><b>DÉCIMA DIVISIÓN</b></h5>
        <?php }?>
        <br><h6><b>EDAD</b></h6>
        <h5><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->edad;?>
 años</h5>
        <h6><b>FECHA DE NACIMIENTO</b></h6>
        <h5><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->fecha_nac;?>
</h5>
        <h6><b>CARNET</b></h6>
        <h5><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->carnet;?>
</h5>
        <h6><b>CLUB AL QUE PERTENECE EL PASE</b></h6>
        <h5><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->club_origen;?>
</h5>
        <h7><b>|COMENTARIOS|</b></h7>
        <div class="mostrar-comentarios">
            <p class="margen-cero"><b>Paz Freccero | 23-6-2020 8:30 PM</b></p>
            <p class="margen-cero">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, nobis veniam repudiandae maxime odit nulla doloribus porro, amet reprehenderit voluptatum cum reiciendis eveniet corrupti sed, accusamus quasi fugiat nesciunt fugit?</p>
            <p class="margen-cero margen-botton">Puntuación: 3</p>
            <p class="margen-cero"><b>Leo Esains | 23-6-2020 8:45 PM</b></p>
            <p class="margen-cero">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, nobis veniam repudiandae maxime odit nulla doloribus porro, amet reprehenderit voluptatum cum reiciendis eveniet corrupti sed, accusamus quasi fugiat nesciunt fugit?</p>
            <p class="margen-cero margen-botton">Puntuación: 1</p>
            <p class="margen-cero"><b>Sebastián Esains | 23-6-2020 9:41 PM</b></p>
            <p class="margen-cero">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, nobis veniam repudiandae maxime odit nulla doloribus porro, amet reprehenderit voluptatum cum reiciendis eveniet corrupti sed, accusamus quasi fugiat nesciunt fugit?</p>
            <p class="margen-cero margen-botton">Puntuación: 5</p>
        </div>
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
">ARQ | <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['jugador']->value->nombre, 'UTF-8');?>
</a></h6>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['jugador']->value->puesto == "DEFENSOR") {?>
                                        <h6><a class="fila" href="ver_jugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
">DEF | <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['jugador']->value->nombre, 'UTF-8');?>
</a></h6>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['jugador']->value->puesto == "VOLANTE") {?>
                                        <h6><a  class="fila" href="ver_jugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
">VOL | <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['jugador']->value->nombre, 'UTF-8');?>
</a></h6>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['jugador']->value->puesto == "DELANTERO") {?>
                                        <h6><a  class="fila" href="ver_jugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
">DEL | <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['jugador']->value->nombre, 'UTF-8');?>
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
