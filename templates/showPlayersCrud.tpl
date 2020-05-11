{include 'templates/header.admin.tpl'}
    <div>
        <h1>ABM DE JUGADORES</h1>
        <b class="navbar-brand">En esta sección usted podrá hacer ALTAS, BAJAS y MODIFICACIONES de Jugadores.</b><br>
        <b class="navbar-brand">Seleccione una OPCIÓN.</b>
    </div>
    <div>
        <form action="agregarJugador" method="POST">
            <label><b>Dar Alta a un Jugador</b></label>
            <button type="submit"><b>Alta</b></button>
        </form>
        <b class="navbar-brand">Para Editar o dar Baja a un Jugador deberá conocer su DNI</b>
        <form action="editarJugador" method="POST">
            <label><b>Ingrese DNI del jugador que desea EDITAR</b></label>
            <input type="text" name="dni">
            <button type="submit"><b>Editar</b></button>
        </form>

        <form action="eliminarJugador" method="POST">
            <label><b>Ingrese DNI del jugador que desea dar de BAJA</b></label>
            <input type="text" name="dni">
            <button type="submit"><b>Baja</b></button>
        </form>
    </div>
    <a class="nav-link" href="elegir_tarea"><b>Volver sin Confirmar Cambios</b></a>;
{include 'templates/footer.tpl'}