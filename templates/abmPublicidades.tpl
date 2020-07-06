{include 'header.admin.tpl'}
    <div class="titulo_mostrar_jugadores">
        <p><b>PUBLICIDADES</b> DEL CLUB PARA LA TEMPORADA 2020</p>
    </div>
    <div class="contenedor-btn-mensaje">
        <div>
            <div class="contenedor-msg">
            {if {$error}}
                <MARQUEE loop="2">{$error}</MARQUEE>
            {/if}
        </div>
        </div>
        
        <div class="centrar btn_alta">
            <h4><a class="btn btn-danger" href="agregar_publicidad"><b>Alta Publicidad</b></a></h4>
        </div>
    </div>

<div class="conteiner contenedor_abm_publicidades">

    {foreach from=$publicidades item=publicidad} 
        {if $publicidad->contacto != "San Lorenzo"}
            <div class="contenedor_show_publicidad centrar">
                <div class="centrar">
                    <b class="fuente_nombre">CONTACTO: {$publicidad->contacto}</b>
                </div>
                <div class="centrar">
                    <b>VALOR: ${$publicidad->valor}</b>
                </div>
                
                <div class="centrar">
                    <img class="imagen_amb_publicidad"src="{$publicidad->imagen}">
                    {if $publicidad->imagen2 != ""}
                        <img class="imagen_amb_publicidad"src="{$publicidad->imagen2}">    
                    {/if}
                    {if $publicidad->imagen3 != ""}
                        <img class="imagen_amb_publicidad"src="{$publicidad->imagen3}">    
                    {/if}
                </div>
                {*<div class="centrar">
                    <a class="btn btn-danger" href="eliminar_foto/{$publicidad->id_publicidad}">
                        <b>Eliminar foto | <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg></b>
                    </a>
                </div>*}
            </div>    
        {/if}
    {/foreach}
    
      
</div>
{include 'templates/footer.tpl'}