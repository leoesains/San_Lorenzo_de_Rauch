{include 'header.admin.tpl'}

<h1>USUARIOS</h1>
{foreach from=$usuarios item=usuario}

    <form id="form-comentario" class="contenedor-form-comentario" method="POST">
        <input type="hidden" name="id_administrador" value="{$usuario->id_administrador}">
        
        <input type="text" name="name" value="{$usuario->nombre}">
        <input type="text" name="username" value="{$usuario->nombre_usuario}">
        <select name="type">
            <option selected>{$usuario->tipo}</option>
            {foreach from=$tipos item=tipo} 
                <option>{$tipo->tipo}</option>
            {/foreach}
        </select>>
        <a class="btn btn-danger btn-volver" href="eliminar_usuario/{$usuario->id_administrador}"><b>Eliminar</b></a>
        <a class="btn btn-danger btn-volver" href="editar_usuario/{$usuario->id_administrador}"><b>Guardar</b></a>
    </form>
{/foreach}
{include 'templates/footer.tpl'}




        
