{include 'templates/header.tpl'}
    <div class="contenedorPerfil">
        <div>
            <img class="imagen_perfil"src="{$datosJug->imagen}">
        </div>
        <div class="datosJugador">
            <h3><b>PERFIL DEL JUGADOR</b></h3>
            <p id="nombre_jugador_perfil">{$datosJug->nombre}</p>
            <h1>{$datosJug->puesto}</h1>
            {if $datosJug->id_division == 3}
                <h3><b>PRIMERA DIVISIÓN</b></h3>
            {/if}
            {if $datosJug->id_division == 5}
                <h3><b>QUINTA DIVISIÓN</b></h3>
            {/if}
            {if $datosJug->id_division == 6}
                <h3><b>SEXTA DIVISIÓN</b></h3>
            {/if}
            {if $datosJug->id_division == 7}
                <h3><b>SÉPTIMA DIVISIÓN</b></h3>
            {/if}
            {if $datosJug->id_division == 8}
                <h3><b>OCTAVA DIVISIÓN</b></h3>
            {/if}
            {if $datosJug->id_division == 9}
                <h3><b>NOVENA DIVISIÓN</b></h3>
            {/if}
            {if $datosJug->id_division == 30}
                <h3><b>DÉCIMA DIVISIÓN</b></h3>
            {/if}
            <br><h4><b>EDAD</b></h4>
            <h3>{$datosJug->edad} años</h3>
            <h4><b>FECHA DE NACIMIENTO</b></h4>
            <h3>{$datosJug->fecha_nac}</h3>
            <h4><b>CARNET</b></h4>
            <h3>{$datosJug->carnet}</h3>
            <h4><b>CLUB AL QUE PERTENECE EL PASE</b></h4>
            <h3>{$datosJug->club_origen}</h3>
        </div>
        <div class="contenedorTablaJugadores">
            <div class="otros_perfiles">
                <p class="titulo_otros_perfiles"><b>OTROS PERFILES</b></p>
            </div>
            <div class="contenedorTablaJugadores">    
                <table class="table-fixed">
                    <tbody>
                        <tr>
                            {foreach from=$listaJugadores item=jugador}
                                <td id="nombre">
                                    <div class="col-sm">
                                        {if $jugador->puesto == "ARQUERO"}
                                            <h6><a  class="fila" href="ver_jugador/{$jugador->id_jugador}">ARQ | {$jugador->nombre}</a></h6>
                                        {/if}
                                        {if $jugador->puesto == "DEFENSOR"}
                                            <h6><a class="fila" href="ver_jugador/{$jugador->id_jugador}">DEF | {$jugador->nombre}</a></h6>
                                        {/if}
                                        {if $jugador->puesto == "VOLANTE"}
                                            <h6><a  class="fila" href="ver_jugador/{$jugador->id_jugador}">VOL | {$jugador->nombre}</a></h6>
                                        {/if}
                                        {if $jugador->puesto == "DELANTERO"}
                                            <h6><a  class="fila" href="ver_jugador/{$jugador->id_jugador}">DEL | {$jugador->nombre}</a></h6>
                                        {/if}
                                    </div>
                                </td>
                            {/foreach}      
                        </tr>
                    </tbody>
                </table>
            </div>    
        </div>
    </div>
        
 
{include 'templates/footer.tpl'}