{include 'templates/header.admin.tpl'}
    <div id="form_delete_jugador">
        <label id="pregunta-eliminar-jugador">¿Está seguro que quiere Eliminar Definitivamente al usuario {$usuario->nombre_usuario}?</label>
        <div class="btn-eliminar-jugador">
            <a class="btn btn-danger btn-volver" href="confirmar_eliminar_usuario/{$usuario->id_administrador}"><b>Eliminar</b></a>;
            <a class="btn btn-danger btn-volver" href="listar_usuarios"><b>Volver</b></a>;
        </div>
    </div>
{include 'templates/footer.tpl'}