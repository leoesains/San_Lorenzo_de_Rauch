{include 'templates/header.tpl'}
    <form action="agregarJugador" method="POST">
        <label>Agregar Jugador</label>
        <button type="submit">Agregar</button>
    </form>

    <div class="contenedorTablaJugadores">
        <table class="table">
            <caption>LISTA DE JUGADORES TEMPORADA 2020</caption>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>DNI</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$listaJugadores item=jugador}
                    <tr>
                        <td>
                            <b>{$jugador->nombre}</b>
                        </td>
                        <td>
                            {$jugador->id_jugador}
                        </td>
                        <td>
                            <a href="editarJugador/{$jugador->id_jugador}">Editar</a>    
                        </td>
                        <td>
                        <a href="eliminarJugador/{$jugador->id_jugador}">Eliminar</a>    
                        </td>
                    </tr>
                {/foreach}   
            </tbody>
        </table>
    </div>
{include 'templates/footer.tpl'}