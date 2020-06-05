<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-05 04:18:16
  from 'C:\xampp\htdocs\proyectos\Web 2\San_Lorenzo_de_Rauch\templates\showDivisions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed9ab68ac8c66_48248580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4bb310ad4e22049fd474f1796c9626c8dc85b55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web 2\\San_Lorenzo_de_Rauch\\templates\\showDivisions.tpl',
      1 => 1591323488,
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
function content_5ed9ab68ac8c66_48248580 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>     <?php $_smarty_tpl->_subTemplateRender('file:header.admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
ob_start();
echo !$_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>     <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
ob_start();
echo !$_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>     <div class="titulo_mostrar_jugadores">
        <p><b>DIVISIONES</b> DEL CLUB PARA LA TEMPORADA 2020</p>
    </div>
<?php }
ob_start();
echo $_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4) {?>     <div class="contenedor-btn-mensaje">
        <div>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['error']->value;
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5) {?>
                <div class="alert alert-danger contenedor-alert-division">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </div>
            <?php }?>
        </div>
        
        <div class="centrar btn_alta">
            <h4><a class="btn btn-danger" href="agregar_division"><b>Alta División</b></a></h4>
        </div>
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
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6) {?>                 <div class="centrar">
                    <a class="btn btn-danger" href="divisiones_jugadores/<?php echo $_smarty_tpl->tpl_vars['division']->value->id_division;?>
"><b>Ver Jugadores</b></a>
                </div>          
            <?php }?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['isAdmin']->value;
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7) {?>                 <div class="centrar">
                    <a class="btn btn-danger" href="divisiones_jugadores/<?php echo $_smarty_tpl->tpl_vars['division']->value->id_division;?>
"><b>Ver Jugadores</b></a>
                    <a class="btn btn-danger" href="editar_division/<?php echo $_smarty_tpl->tpl_vars['division']->value->id_division;?>
">
                        <b><svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                        <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                        </svg></b>
                    </a>
                    <a class="btn btn-danger" href="eliminar_division/<?php echo $_smarty_tpl->tpl_vars['division']->value->id_division;?>
">
                        <b><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg></b>
                    </a>
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
