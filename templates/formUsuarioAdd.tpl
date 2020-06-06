{include 'templates/header.home.tpl'}
    <form id="form_add_jugador" action="guardar_usuario" method="POST">
        <h1>DATOS DEL USUARIO</h1>
        <label>INGRESE SU NOMBRE COMPLETO</label>
        <input type="text" placeholder="NOMBRE" name="nombre">
        <label>INGRESE SU USUARIO (CORREO ELECTRÒNICO)</label>
        <input type="email" class="mayuscula" placeholder="EMAIL" name="email">
        <label>INGRESE SU CONTRASEÑA</label>
        <input type="password" placeholder="CONTRASEÑA" name="contraseña">
        <label>REPITA LA CONTRASEÑA</label>
        <input type="password" placeholder="REPITA CONTRASEÑA" name="repitaContraseña">
        
        <button type="submit" class="btn btn-danger btn-volver"><b>Enviar</b></button>
        <a class="btn btn-danger btn-volver" href="home"><b>Salir</b></a>;
        {if $error}
            <div class="alert alert-danger contenedor-alert-usuario">
                {$error}
            </div>
        {/if}
    </form>
    
{include 'templates/footer.tpl'}