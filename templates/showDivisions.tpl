{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'header.admin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    <div class="titulo_mostrar_jugadores">
        <p><b>DIVISIONES</b> DEL CLUB PARA LA TEMPORADA 2020</p>
    </div>
{/if}
{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    <div class="contenedor-btn-mensaje">
        <div>
            {if {$error}}
                <div class="alert alert-danger contenedor-alert-division">
                    {$error}
                </div>
            {/if}
        </div>
        
        <div class="centrar btn_alta">
            <h4><a class="btn btn-danger" href="agregar_division"><b>Alta División</b></a></h4>
        </div>
    </div>
{/if}
<div class="conteiner contenedor_divisiones">

    {foreach from=$listaDivisiones item=division} 
        <div class="contenedor_show_division centrar">
            <div class="centrar">
                <b class="fuente_nombre">{$division->nombre_div} DIVISIÓN</b>
            </div>
            <div class="centrar">
                <p>Edad Máxima {$division->edad_limite} años</p>
            </div>
            <div class="centrar">
                <p>Cantidad Máxima de jugadores en <b>Lista de Buena Fe</b>: {$division->limite_jugadores_LBF}</p>
            </div>
            <div class="centrar alto_excepciones">
                Observaciones: {$division->excepciones}
            </div>
            {if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
                <div class="centrar">
                    <a class="btn btn-danger" href="divisiones_jugadores/{$division->id_division}"><b>Ver Jugadores</b></a>
                </div>          
            {/if}
            {if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
                <div class="centrar">
                    <a class="btn btn-danger" href="divisiones_jugadores/{$division->id_division}"><b>Ver Jugadores</b></a>
                    <a class="btn btn-danger" href="editar_division/{$division->id_division}">
                        <b><svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                        <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                        </svg></b>
                    </a>
                    <a class="btn btn-danger" href="eliminar_division/{$division->id_division}">
                        <b><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg></b>
                    </a>
                </div>
                           
            {/if}
        </div>    
    {/foreach}
    
      
</div>
{include 'templates/footer.tpl'}