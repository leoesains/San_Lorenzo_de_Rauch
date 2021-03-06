{include 'header.admin.tpl'}
<div class="titulo_mostrar_jugadores">
    <p><b>USUARIOS REGISTRADOS EN EL SISTEMA</b></p>
</div>
<div class="contenedor-msg">
    {if {$error}}
        <MARQUEE loop="2">{$error}</MARQUEE>
    {/if}
</div>
<div class="contenedor-usuarios">
    {foreach from=$usuarios item=usuario}
        {if {$usuario->nombre != "San Lorenzo"}}
            <div>
                <form id="form-comentario" class="contenedor-form-comentario" action="editar_usuario/{$usuario->id_usuario}" method="POST">
                    <input type="hidden" name="id_usuario" value="{$usuario->id_usuario}">
                    <input class="input-usuario" type="text" readonly="readonly" name="name" value="{$usuario->nombre}">
                    <input class="input-usuario" type="text" readonly="readonly" name="username" value="{$usuario->nombre_usuario}">
                    <select class="select_usuario" name="type">
                        <option selected>{$usuario->tipo}</option>
                        {foreach from=$tipos item=tipo} 
                            <option>{$tipo->tipo}</option>
                        {/foreach}
                    </select>
                    <div class="btns-usuario">
                        <a class="btn btn-danger btn-volver" href="eliminar_usuario/{$usuario->id_usuario}"><b>Eliminar</b></a>
                        <button type="submit" class="btn btn-danger btn-volver"><b>Guardar</b></button>
                    </div>
                </form>
            </div>
        {/if}
    {/foreach}
</div>
{include 'templates/footer.tpl'}




        
