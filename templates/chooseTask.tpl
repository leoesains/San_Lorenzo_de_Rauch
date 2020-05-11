{include 'templates/header.admin.tpl'}
    <div>
        <b class="navbar-brand">Seleccione una OPCIÓN.</b>
        <form action="jugadores" method="POST">
            <label><b>Altas/Bajas/Modificaciones Jugadores</b></label>
            <button type="submit"><b>Ir a ABM</b></button>
        </form>

        <form action="categorias" method="POST">
            <label><b>Altas/Bajas/Modificaciones Divisiones</b></label>
            <button type="submit"><b>Ir a ABM</b></button>
        </form>
    </div>
{include 'templates/footer.tpl'}