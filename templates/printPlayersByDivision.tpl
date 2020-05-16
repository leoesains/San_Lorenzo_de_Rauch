{include 'templates/header.tpl'}
    <div class="titulo_mostrar_jugadores">
        <p>
            JUGADORES  DE 
            {if {$jugadoresXdivisiones[0]->id_division} == 1}
                <b>PRIMERA</b> 
            {/if}
            {if {$jugadoresXdivisiones[0]->id_division} == 2}
                <b>SEGUNDA</b> 
            {/if}
            {if {$jugadoresXdivisiones[0]->id_division} == 3}
                <b>TERCERA</b> 
            {/if}
            {if {$jugadoresXdivisiones[0]->id_division} == 4}
                <b>CUARTA</b> 
            {/if}
            {if {$jugadoresXdivisiones[0]->id_division} == 5}
                <b>QUINTA</b> 
            {/if}
            {if {$jugadoresXdivisiones[0]->id_division} == 6}
                <b>SEXTA</b> 
            {/if}
            {if {$jugadoresXdivisiones[0]->id_division} == 7}
                <b>SÉPTIMA</b> 
            {/if}
            {if {$jugadoresXdivisiones[0]->id_division} == 8}
                <b>OCTAVA</b> 
            {/if}
            {if {$jugadoresXdivisiones[0]->id_division} == 9}
                <b>NOVENA</b> 
            {/if}
            {if {$jugadoresXdivisiones[0]->id_division} == 10}
                <b>DÉCIMA</b> 
            {/if}
            DIVISIÓN DEL CLUB PARA LA TEMPORADA 2020
        </p>
    </div>
    <div class="conteiner contenedor">
        {foreach from=$jugadoresXdivisiones item=jugXdiv}
            <div class="contenedor_show_player">
                <div class="centrar">
                    <div class="alto">
                        <b class="fuente_nombre">{$jugXdiv->nombre|upper}</b>
                    </div>
                    <img class="imagen_show_player" src="{$jugXdiv->imagen}">
                </div>
                <div class="centrar puesto">
                    <h5><b>{$jugXdiv->puesto|upper}</b></h5>
                </div>
                <div class="centrar">
                    <h4><a class="btn btn-danger" href="ver_jugador_division/{$jugXdiv->id_jugador}/{$jugXdiv->id_division}">Perfil</a></h4>
                </div>
            </div>
        {/foreach}  
    </div>    



{include 'templates/footer.tpl'}