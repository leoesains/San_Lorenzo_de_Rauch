{include 'templates/header.admin.tpl'}
    <form action="eliminar_jugador" method="POST">
        
        <label>¿Esta seguro que quiere eliminar al jugador {$jugador->nombre}?</label>
        <a class="btn btn-danger btn-volver" href="confirmar_eliminar_jugador/{$jugador->id_jugador}"><b>Eliminar</b></a>;
        <a class="btn btn-danger btn-volver" href="listar_jugadores"><b>Volver</b></a>;
        
    </form>
    
{include 'templates/footer.tpl'}
