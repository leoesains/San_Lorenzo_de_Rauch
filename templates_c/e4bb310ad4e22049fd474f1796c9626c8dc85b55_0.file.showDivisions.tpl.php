<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-17 05:51:59
  from 'C:\xampp\htdocs\proyectos\Web 2\San_Lorenzo_de_Rauch\templates\showDivisions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec0b4df2b9f87_60065052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4bb310ad4e22049fd474f1796c9626c8dc85b55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web 2\\San_Lorenzo_de_Rauch\\templates\\showDivisions.tpl',
      1 => 1589687500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ec0b4df2b9f87_60065052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php ob_start();
echo !$_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>         <div class="titulo_mostrar_jugadores">
            <p><b>DIVISIONES</b> DEL CLUB PARA LA TEMPORADA 2020</p>
        </div>
    <?php }?>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>         <div class="centrar btn_alta">
            <h4><a class="btn btn-danger" href="agregar_division"><b>Alta División</b></a></h4>
        </div>
    <?php }?>
    <div class="conteiner contenedor_divisiones">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaDivisiones']->value, 'division');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['division']->value) {
?> 
            <div class="contenedor_show_division centrar">
                <div class="centrar">
                    <b class="fuente_nombre"><?php echo $_smarty_tpl->tpl_vars['division']->value->nombre_div;?>
 DIVISIÓN</b>
                </div>
                <div class="centrar">
                    <p>Edad Máxima <?php echo $_smarty_tpl->tpl_vars['division']->value->edad_limite;?>
 años</p>
                </div>
                <div class="centrar">
                    <p>Cantidad Máxima de jugadores en <b>Lista de Buena Fe</b>: <?php echo $_smarty_tpl->tpl_vars['division']->value->limite_jugadores_LBF;?>
</p>
                </div>
                <div class="centrar alto_excepciones">
                    Observaciones: <?php echo $_smarty_tpl->tpl_vars['division']->value->excepciones;?>

                </div>
                <?php ob_start();
echo !$_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>                     <div class="centrar">
                        <a class="btn btn-danger" href="divisiones_jugadores/<?php echo $_smarty_tpl->tpl_vars['division']->value->id_division;?>
"><b>Ver Jugadores</b></a>
                    </div>          
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4) {?>                     <div class="centrar">
                        <a class="btn btn-danger" href="editar_division/<?php echo $_smarty_tpl->tpl_vars['division']->value->id_division;?>
"><b>Modificar</b></a>
                        <a class="btn btn-danger" href="eliminar_division/<?php echo $_smarty_tpl->tpl_vars['division']->value->id_division;?>
"><b>Baja</b></a>
                    </div>          
                <?php }?>

            </div>    
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
