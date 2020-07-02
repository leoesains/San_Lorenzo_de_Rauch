{include 'templates/header.admin.tpl'}
    
    <div id="form_add_jugador">
        <h2>DATOS DEL USUARIO</h2>
        <label>NOMBRE</label>
        <input type="text" name="nombre" readonly="readonly" value="{$usuario->nombre}">
        <label>NOMBRE DE USUARIO</label>
        <input type="text" name="nombre_usuario" readonly="readonly" value="{$usuario->nombre_usuario}">
        <label>TIPO DE USUARIO</label>
        <input type="text" name="tipo" readonly="readonly" value="{$usuario->tipo}">
        <a class="btn btn-danger btn-volver" href="listar_divisiones"><b>Salir</b></a>
         
    </div>
    
{include 'templates/footer.tpl'}
