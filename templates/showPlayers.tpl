{include 'templates/header.tpl'}
    <div class="contenedorTablaJugadores">
        <table class="table">
            <caption>LISTA DE JUGADORES TEMPORADA 2020</caption>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>DNI</th>
                    <th>PERFIL</th>
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
                            <a href="verJugador/{$jugador->id_jugador}">Ver</a>    
                        </td>
                </tr>
                {/foreach}   
            </tbody>
        </table>
    </div>
{include 'templates/footer.tpl'}