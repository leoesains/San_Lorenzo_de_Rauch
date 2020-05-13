{include 'templates/header.tpl'}
    <div class="contenedorTablaJugadores">
        <table class="table table-fixed">
            <caption>LISTA DE JUGADORES TEMPORADA 2020</caption>
            
            <tbody>
                {foreach from=$listaJugadores item=jugador}
                    <tr>
                        <td id="nombre">
                            <b><a href="ver_jugador/{$jugador->id_jugador}">{$jugador->nombre|upper}</a></b>
                        </td>
                    </tr>
                {/foreach}   
            </tbody>
        </table>
    </div>
{include 'templates/footer.tpl'}