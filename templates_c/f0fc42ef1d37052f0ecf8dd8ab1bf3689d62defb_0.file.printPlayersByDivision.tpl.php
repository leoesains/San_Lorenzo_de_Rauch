<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 15:01:30
  from 'C:\xampp\htdocs\proyectos\Web 2\San_Lorenzo_de_Rauch\templates\printPlayersByDivision.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edf882ab0fe15_70406919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0fc42ef1d37052f0ecf8dd8ab1bf3689d62defb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web 2\\San_Lorenzo_de_Rauch\\templates\\printPlayersByDivision.tpl',
      1 => 1591707096,
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
function content_5edf882ab0fe15_70406919 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value != "administrador";
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>
        <div class="titulo_mostrar_jugadores">
            <p>
                JUGADORES  DE 
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['jugadoresXdivisiones']->value[0]->id_division;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == 1) {?>
                    <b>PRIMERA</b> 
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['jugadoresXdivisiones']->value[0]->id_division;
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == 2) {?>
                    <b>SEGUNDA</b> 
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['jugadoresXdivisiones']->value[0]->id_division;
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 == 3) {?>
                    <b>TERCERA</b> 
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['jugadoresXdivisiones']->value[0]->id_division;
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7 == 4) {?>
                    <b>CUARTA</b> 
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['jugadoresXdivisiones']->value[0]->id_division;
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8 == 5) {?>
                    <b>QUINTA</b> 
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['jugadoresXdivisiones']->value[0]->id_division;
$_prefixVariable9 = ob_get_clean();
if ($_prefixVariable9 == 6) {?>
                    <b>SEXTA</b> 
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['jugadoresXdivisiones']->value[0]->id_division;
$_prefixVariable10 = ob_get_clean();
if ($_prefixVariable10 == 7) {?>
                    <b>SÉPTIMA</b> 
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['jugadoresXdivisiones']->value[0]->id_division;
$_prefixVariable11 = ob_get_clean();
if ($_prefixVariable11 == 8) {?>
                    <b>OCTAVA</b> 
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['jugadoresXdivisiones']->value[0]->id_division;
$_prefixVariable12 = ob_get_clean();
if ($_prefixVariable12 == 9) {?>
                    <b>NOVENA</b> 
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['jugadoresXdivisiones']->value[0]->id_division;
$_prefixVariable13 = ob_get_clean();
if ($_prefixVariable13 == 10) {?>
                    <b>DÉCIMA</b> 
                <?php }?>
                DIVISIÓN DEL CLUB PARA LA TEMPORADA 2020
            </p>
        </div>
    <?php }?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value == "administrador";
$_prefixVariable14 = ob_get_clean();
if ($_prefixVariable14) {?>
        <div class="centrar btn_alta">
            <h4><a class="btn btn-danger" href="agregar_jugador"><b>Alta Jugador</b></a></h4>
        </div>
    <?php }?>
    <div class="conteiner contenedor">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadoresXdivisiones']->value, 'jugXdiv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jugXdiv']->value) {
?>
            <div class="contenedor_show_player">
                <div class="centrar">
                    <div class="alto">
                        <b class="fuente_nombre"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['jugXdiv']->value->nombre, 'UTF-8');?>
</b>
                    </div>
                    <img class="imagen_show_player" src="<?php echo $_smarty_tpl->tpl_vars['jugXdiv']->value->imagen;?>
">
                </div>
                <div class="centrar puesto">
                    <h5><b><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['jugXdiv']->value->puesto, 'UTF-8');?>
</b></h5>
                </div>
                <div class="centrar">
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value == "administrador";
$_prefixVariable15 = ob_get_clean();
if ($_prefixVariable15) {?>
                        <h4><a class="btn btn-danger" href="ver_jugador_division/<?php echo $_smarty_tpl->tpl_vars['jugXdiv']->value->id_jugador;?>
/<?php echo $_smarty_tpl->tpl_vars['jugXdiv']->value->id_division;?>
"><b>Ver | Edit | Baja</b></a></h4>
                    <?php }?>
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value != "administrador";
$_prefixVariable16 = ob_get_clean();
if ($_prefixVariable16) {?>
                        <h4><a class="btn btn-danger" href="ver_jugador_division/<?php echo $_smarty_tpl->tpl_vars['jugXdiv']->value->id_jugador;?>
/<?php echo $_smarty_tpl->tpl_vars['jugXdiv']->value->id_division;?>
"><b>Perfil</b></a></h4>
                    <?php }?>
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
