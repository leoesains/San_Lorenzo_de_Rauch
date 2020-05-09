{include 'templates/header.tpl'}
    <div class="contenedorTablaJugadores">
        <table class="table">
            <caption>JUGADORES POR DIVISION TEMPORADA 2020</caption>
            <thead>
                <tr>
                    <th>JUGADOR</th>
                    <th>DIVISION</th>
                    <th>PERFIL</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$jugadoresXdivisiones item=jugXdiv}
                    <tr>
                        <td>
                            <b>{$jugXdiv->nombre}</b>
                        </td>
                        <td>
                            {$jugXdiv->nombre_div}
                        </td>
                        <td>
                            <a href="verJugador/{$jugXdiv->id_jugador}">Ver</a>    
                        </td>
                    </tr>
                {/foreach}   
            </tbody>
        </table>
    </div>
{include 'templates/footer.tpl'}