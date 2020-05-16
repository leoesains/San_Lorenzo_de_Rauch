{include 'templates/header.tpl'}
    <div class="conteiner contenedor">
        {foreach from=$listaJugadores item=jugador}
            <div class="contenedor_show_player">
                <div class="centrar">
                    <div class="alto">
                        <b class="fuente_nombre">{$jugador->nombre|upper}</b>
                    </div>
                    <img class="imagen_show_player" src="{$jugador->imagen}">
                </div>
                <div class="centrar puesto">
                    <h5><b>{$jugador->puesto|upper}</b></h5>
                </div>
                <div class="centrar">
                    <h4><a class="btn btn-danger" href="ver_jugador/{$jugador->id_jugador}">Perfil</a></h4>
                </div>
            </div>
        {/foreach}  
    </div>
 
{include 'templates/footer.tpl'}