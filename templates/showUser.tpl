{include 'templates/header.admin.tpl'}
    
    <div id="form_add_jugador">
        <h2>DATOS DEL USUARIO</h2>
        <label>NOMBRE</label>
        {$usuario->nombre}
        <label>NOMBRE DE USUARIO</label>
        {$usuario->nombre_usuario}
        <label>TIPO DE USUARIO</label>
        {$usuario->tipo}
        <a class="btn btn-danger btn-volver" href="home"><b>Salir</b></a>
         
    </div>
    
{include 'templates/footer.tpl'}
