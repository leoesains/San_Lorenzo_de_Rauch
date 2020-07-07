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
            </div>    
        {/if}
    {/foreach}
</div>
{include 'templates/footer.tpl'}