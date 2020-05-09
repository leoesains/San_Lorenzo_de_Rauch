<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-08 23:38:31
  from 'C:\xampp\htdocs\proyectos\Web 2\San_Lorenzo_de_Rauch\templates\showPlayer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb5d1573b4873_47152407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2778aa15fb868b8084e3c4d24ef317ac94a2c5a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web 2\\San_Lorenzo_de_Rauch\\templates\\showPlayer.tpl',
      1 => 1588973757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5eb5d1573b4873_47152407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="contenedorPerfil">
        <div>
            <img src="<?php echo $_smarty_tpl->tpl_vars['datosJug']->value->imagen;?>
">
        </div>
        <div class="datosJugador">
            <h3><b>PERFIL DEL JUGADOR</b></h3>
            <p><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->nombre;?>
</p>
            <h4><b>EDAD</b></h4>
            <h3><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->edad;?>
 años</h3>
            <h4><b>FECHA DE NACIMIENTO</b></h4>
            <h3><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->fecha_nac;?>
</h3>
            <h4><b>CARNET</b></h4>
            <h3><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->carnet;?>
</h3>
            <h4><b>PUESTO</b></h4>
            <h3><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->puesto;?>
</h3>
            <h4><b>CLUB AL QUE PERTENECE EL PASE</b></h4>
            <h3><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->club_origen;?>
</h3>
            <h4><b>TELÉFONO DE CONTACTO</b></h4>
            <h3><?php echo $_smarty_tpl->tpl_vars['datosJug']->value->telefono;?>
</h3>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
