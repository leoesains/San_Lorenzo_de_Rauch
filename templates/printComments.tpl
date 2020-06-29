{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'header.admin.tpl'}
{/if}
<div class="titulo_mostrar_jugadores">
    <p>COMENTARIOS DEL JUGADOR <b>{$nombre_jugador}</b></p>
</div>
{*SI ES UN ADMINISTRADOR*}

<div class="conteiner contenedor_divisiones">
    {foreach from=$comentarios item=comentario} 
        <div class="contenedor_show_division centrar">
            <div class="centrar">
                <b class="fuente_nombre">{$comentario->usuario} | {$comentario->fecha}</b>
            </div>
            <div class="centrar">
                <p>{$comentario->comentario}</p>
            </div>
            {*SI ES UN ADMINISTRADOR*}
            {if {$type == "administrador"}}
                <div class="centrar">
                    <input type="hidden" name="id_comentario" value="{$comentario->id_comentario}">
                    <input type="button" value="Eliminar" id="eliminar-comentario" class="btn btn-danger btn-volver">
                </div>
            {/if}
        </div>    
    {/foreach}
</div>
{include 'templates/footer.tpl'}