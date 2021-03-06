{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'header.admin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
<div class="titulo_mostrar_jugadores ancho">
    <p> PERFILES 
        {if {$datosJug->id_division} == 1}
            <b>PRIMERA</b> 
        {/if}
        {if {$datosJug->id_division} == 2}
            <b>SEGUNDA</b> 
        {/if}
        {if {$datosJug->id_division} == 5}
            <b>TERCERA</b> 
        {/if}
        {if {$datosJug->id_division} == 4}
            <b>CUARTA</b> 
        {/if}
        {if {$datosJug->id_division} == 5}
            <b>QUINTA</b> 
        {/if}
        {if {$datosJug->id_division} == 6}
            <b>SEXTA</b> 
        {/if}
        {if {$datosJug->id_division} == 7}
            <b>SÉPTIMA</b> 
        {/if}
        {if {$datosJug->id_division} == 8}
            <b>OCTAVA</b> 
        {/if}
        {if {$datosJug->id_division} == 9}
            <b>NOVENA</b> 
        {/if}
        {if {$datosJug->id_division} == 10}
            <b>DÉCIMA</b> 
        {/if}
        DIVISIÓN TEMPORADA 2020
    </p>
</div>
<div class="contenedorPerfil">
    <div>
        <img class="imagen_perfil"src="{$datosJug->imagen}">
        {*{if {$isAdmin}} {* SI ES ADMINISTRADOR*}
        {if {$type == "administrador"}}
            <h6><a class="btn btn-danger centrar btn_alta" href="editar_jugador/{$datosJug->id_jugador}"><b>Editar Jugador</b></a></h6>
            <h6><a class="btn btn-danger centrar btn_alta" href="eliminar_jugador/{$datosJug->id_jugador}"><b>Baja del Jugador</b></a></h6>
        {/if}
        <h6><a class="btn btn-danger centrar btn_alta margen-bottom" href="divisiones_jugadores/{$datosJug->id_division}"><b>Volver</b></a>
    
        <div >
            {* Espacio para poner form para hacer comentarios *}

            <input type="hidden" name="tipo_usuario" value="{$type}">
            <input type="hidden" name="nombre_usuario" value="{$nameUser}"> 
            <input type="hidden" name="id_jugador" value="{$datosJug->id_jugador}">
            {include 'templates/vue/formAddComment.vue'} 
        </div>
    
    </div>
    <div class="datosJugador">
        <p id="nombre_jugador_perfil">{$datosJug->nombre|upper}</p>
        <h3>{$datosJug->puesto}</h3>
        {if $datosJug->id_division == 1}
            <h5><b>PRIMERA DIVISIÓN</b></h5>
        {/if}
        {if $datosJug->id_division == 5}
            <h5><b>QUINTA DIVISIÓN</b></h5>
        {/if}
        {if $datosJug->id_division == 6}
            <h5><b>SEXTA DIVISIÓN</b></h5>
        {/if}
        {if $datosJug->id_division == 7}
            <h5><b>SÉPTIMA DIVISIÓN</b></h5>
        {/if}
        {if $datosJug->id_division == 8}
            <h5><b>OCTAVA DIVISIÓN</b></h5>
        {/if}
        {if $datosJug->id_division == 9}
            <h5><b>NOVENA DIVISIÓN</b></h5>
        {/if}
        {if $datosJug->id_division == 10}
            <h5><b>DÉCIMA DIVISIÓN</b></h5>
        {/if}
        <br><h6><b>EDAD</b></h6>
        <h5>{$datosJug->edad} años</h5>
        <h6><b>FECHA DE NACIMIENTO</b></h6>
        <h5>{$datosJug->fecha_nac}</h5>
        <h6><b>CARNET</b></h6>
        <h5>{$datosJug->carnet}</h5>
        <h6><b>CLUB AL QUE PERTENECE EL PASE</b></h6>
        <h5>{$datosJug->club_origen}</h5>

       {* Espacio para poner los comentarios *}
        {include 'templates/vue/showComments.vue'}
    </div>
    <div class="contenedorTablaJugadores">
        <div class="contenedor-fotos-adicionales">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    {foreach from=$publicidades item=publicidad}
                        {if $publicidad->contacto == "San Lorenzo"}
                            <div class="carousel-item active">
                                <img class="imagen-publicidad" src="{$publicidad->imagen}" class="d-block w-100" alt="...">
                            </div>
                        {/if}
                        {if $publicidad->contacto != "San Lorenzo"}
                            <div class="carousel-item">
                                <img class="imagen-publicidad" src="{$publicidad->imagen}" class="d-block w-100" alt="...">
                            </div>
                            {if $publicidad->imagen2 != ""}
                                <div class="carousel-item">
                                    <img class="imagen-publicidad" src="{$publicidad->imagen2}" class="d-block w-100" alt="...">    
                                </div>
                            {/if}
                            {if $publicidad->imagen3 != ""}
                                <div class="carousel-item">
                                    <img class="imagen-publicidad" src="{$publicidad->imagen3}" class="d-block w-100" alt="...">    
                                </div>
                            {/if}                           
                        {/if}
                    {/foreach}
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
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
                                        <h6><a  class="fila" href="ver_jugador_division/{$jugador->id_jugador}/{$jugador->id_division}">ARQ | {$jugador->nombre|upper}</a></h6>
                                    {/if}
                                    {if $jugador->puesto == "DEFENSOR"}
                                        <h6><a class="fila" href="ver_jugador_division/{$jugador->id_jugador}/{$jugador->id_division}">DEF | {$jugador->nombre|upper}</a></h6>
                                    {/if}
                                    {if $jugador->puesto == "VOLANTE"}
                                        <h6><a  class="fila" href="ver_jugador_division/{$jugador->id_jugador}/{$jugador->id_division}">VOL | {$jugador->nombre|upper}</a></h6>
                                    {/if}
                                    {if $jugador->puesto == "DELANTERO"}
                                        <h6><a  class="fila" href="ver_jugador_division/{$jugador->id_jugador}/{$jugador->id_division}">DEL | {$jugador->nombre|upper}</a></h6>
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