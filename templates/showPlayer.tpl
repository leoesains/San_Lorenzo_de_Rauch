{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'header.admin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
<div class="titulo_mostrar_jugadores ancho">
    <p><b>PERFILES JUGADORES</b> TEMPORADA <b> 2020</b></p>
</div>
<div class="contenedorPerfil">
    <div>
        <img class="imagen_perfil"src="{$datosJug->imagen}">
        {if {$isAdmin}} {* SI ES ADMINISTRADOR*}
            <h4><a class="btn btn-danger centrar btn_alta" href="editar_jugador/{$datosJug->id_jugador}"><b>Editar Jugador | 
                <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                </svg></b>
            </a></h4>
            <h4><a class="btn btn-danger centrar btn_alta" href="eliminar_jugador/{$datosJug->id_jugador}"><b>Baja del Jugador | 
                <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg></b>
            </a></h4>
        {/if}
        <h4><a class="btn btn-danger centrar btn_alta" href="listar_jugadores"><b>Volver |
            <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 0 1 0 .708L3.207 9l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
            <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 0 1 .5.5v4a2.5 2.5 0 0 1-2.5 2.5H3a.5.5 0 0 1 0-1h8.5A1.5 1.5 0 0 0 13 7V3a.5.5 0 0 1 .5-.5z"/>
            </svg></b>
        </a></h4>;
    </div>
    <div class="datosJugador">
        <p id="nombre_jugador_perfil">{$datosJug->nombre|upper}</p>
        <h1>{$datosJug->puesto}</h1>
        {if $datosJug->id_division == 1}
            <h3><b>PRIMERA DIVISIÓN</b></h3>
        {/if}
        {if $datosJug->id_division == 2}
            <h3><b>SEGUNDA DIVISIÓN</b></h3>
        {/if}
        {if $datosJug->id_division == 3}
            <h3><b>TERCERA DIVISIÓN</b></h3>
        {/if}
        {if $datosJug->id_division == 4}
            <h3><b>CUARTA DIVISIÓN</b></h3>
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
        {if $datosJug->id_division == 10}
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
                                        <h6><a  class="fila" href="ver_jugador/{$jugador->id_jugador}">ARQ | {$jugador->nombre|upper}</a></h6>
                                    {/if}
                                    {if $jugador->puesto == "DEFENSOR"}
                                        <h6><a class="fila" href="ver_jugador/{$jugador->id_jugador}">DEF | {$jugador->nombre|upper}</a></h6>
                                    {/if}
                                    {if $jugador->puesto == "VOLANTE"}
                                        <h6><a  class="fila" href="ver_jugador/{$jugador->id_jugador}">VOL | {$jugador->nombre|upper}</a></h6>
                                    {/if}
                                    {if $jugador->puesto == "DELANTERO"}
                                        <h6><a  class="fila" href="ver_jugador/{$jugador->id_jugador}">DEL | {$jugador->nombre|upper}</a></h6>
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