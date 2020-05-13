{include 'templates/header.admin.tpl'}
    <h1>MODIFIQUE LOS DATOS QUE DESEA CAMBIAR</H1>
    <form action="guardar_edicion_jugador" method="POST">
        <input type="hidden" name="dni" value="{$jugador->id_jugador}">
        <label>nombre completo</label>
        <input type="text" name="nombre" value="{$jugador->nombre}">
        <label>edad</label>
        <input type="text" name="edad" value="{$jugador->edad}">
        <label>fecha de nacimiento</label>
        <input type="text" name="fechaNacimiento" value="{$jugador->fecha_nac}">
        <label>numero de carnet</label>
        <input type="text" name="numeroCarnet" value="{$jugador->carnet}">
        <label>puesto en la cancha</label >
        <input type="text" name="puesto" value="{$jugador->puesto}">
        <label>club de origen</label>
        <input type="text" name="clubOrigen" value="{$jugador->club_origen}">
        <label>numero de telefono</label>
        <input type="text" name="telefono" value="{$jugador->telefono}">
        <label>division</label>
        <input type="text" name="division" value="{$jugador->id_division}">
        <label>una foto</label>
        <input type="text" name="foto" value="{$jugador->imagen}">
        <button type="submit">Modificar datos</button>
    </form>
    <a class="nav-link" href="jugadores"><b>Volver sin Confirmar Cambios</b></a>;
{include 'templates/footer.tpl'}