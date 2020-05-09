{include 'templates/header.tpl'}
    <form action="agregarJugador" method="POST">
        <label>Agregar Jugador</label>
        <button type="submit">Agregar</button>
    </form>

    <form action="editarJugador" method="POST">
        <label>Ingrese DNI del jugador</label>
        <input type="text" name="dni">
        <button type="submit">Editar</button>
    </form>

    <form action="eliminarJugador" method="POST">
        <label>Ingrese DNI del jugador</label>
        <input type="text" name="dni">
        <button type="submit">Eliminar</button>
    </form>
    
{include 'templates/footer.tpl'}